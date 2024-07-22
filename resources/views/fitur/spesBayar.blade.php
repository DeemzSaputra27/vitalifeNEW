<x-app-layout>
    <div class="py-12 mt-16">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col md:flex-row justify-between space-y-8 md:space-y-0 md:space-x-8">
                        <div class="flex-1">
                            <div class="flex items-center space-x-4 mb-6">
                                <img src="{{ asset($spesialis->image) }}" alt="spesialis"
                                    class="w-16 h-16 rounded-full object-cover">
                                <div>
                                    <h2 class="text-xl font-semibold">{{ $spesialis->nama }}</h2>
                                    <p class="text-gray-600">{{ $spesialis->spesialisasi }}</p>
                                </div>
                            </div>

                            <!-- Rincian Pembayaran -->
                            <div class="bg-gray-100 p-4 rounded-lg">
                                <div class="flex justify-between mb-2">
                                    <span>Biaya sesi 30 menit</span>
                                    <span>Rp{{ number_format($spesialis->harga, 0, ',', '.') }}</span>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h3 class="text-lg font-semibold mb-2">Tambahkan Voucher</h3>
                                <div class="flex space-x-2">
                                    <input type="text" id="voucherInput" placeholder="Masukkan kode voucher"
                                        class="flex-grow p-2 border rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                                    <button id="applyVoucherBtn"
                                        class="bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition duration-300">
                                        Terapkan
                                    </button>
                                </div>
                                <div id="voucherList" class="mt-2 hidden">
                                    <h4 class="text-sm font-semibold mb-1">Voucher yang Tersedia:</h4>
                                    <ul class="text-sm text-gray-600">
                                        @foreach ($vouchers as $voucher)
                                            <li>{{ $voucher->code }} - {{ $voucher->description }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h3 class="text-lg font-semibold">Total Harga:</h3>
                                <p id="totalPrice" class="text-xl font-bold">
                                    Rp{{ number_format($spesialis->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>

                        <!-- Kolom Kanan: Metode Pembayaran -->
                        <div class="md:w-1/3">
                            <h3 class="text-lg font-semibold mb-4">Metode pembayaran</h3>
                            <div class="space-y-3">

                                <div class="md:w-1/3">
                                    <button id="paymentButton"
                                        class="w-full bg-indigo-600 text-white py-3 px-4 rounded hover:bg-indigo-700 transition duration-300">
                                        Lakukan Pembayaran
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Metode Pembayaran -->
    <div id="paymentMethodModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900"
                onclick="closeModal('paymentMethodModal')">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Pilih Metode Pembayaran</h3>
                <form id="paymentForm" class="mt-4 space-y-4">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label for="bank" class="block text-sm font-medium text-gray-700">Pilih Bank</label>
                        <select id="bank" name="bank" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Pilih Bank</option>
                            <option value="BCA">BCA</option>
                            <option value="Mandiri">Mandiri</option>
                            <option value="BNI">BNI</option>
                            <option value="BRI">BRI</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition duration-300">
                        Bayar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Kode Pembayaran -->
    <div id="paymentCodeModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900"
                onclick="closeModal('paymentCodeModal')">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Kode Pembayaran</h3>
                <div class="mt-2 px-7 py-3">
                    <p class="text-sm text-gray-500">Silakan gunakan kode pembayaran berikut:</p>
                    <p id="paymentCode" class="text-2xl font-bold mt-2"></p>
                </div>
                <div class="items-center px-4 py-3">
                    <button id="closeModal"
                        class="px-4 py-2 bg-indigo-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal WhatsApp -->
    <div id="whatsappModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900"
                onclick="closeModal('whatsappModal')">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Hubungi Spesialis via WhatsApp</h3>
                </p>
            </div>
            <div class="items-center px-4 py-3">
                <button id="whatsappButton"
                    class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-300">
                    Hubungi via WhatsApp
                </button>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script>
        //New
        document.addEventListener('DOMContentLoaded', function() {
            const applyVoucherBtn = document.getElementById('applyVoucherBtn');
            const voucherInput = document.getElementById('voucherInput');
            const voucherList = document.getElementById('voucherList');
            const totalPriceElement = document.getElementById('totalPrice');
            const originalPrice = parseFloat(totalPriceElement.textContent.replace('Rp', '').replace('.', ''));

            applyVoucherBtn.addEventListener('click', function() {
                const enteredCode = voucherInput.value.trim().toUpperCase();

                // Cek voucher yang tersedia
                const voucherItems = voucherList.querySelectorAll('li');
                let foundMatch = false;

                voucherItems.forEach(item => {
                    const itemCode = item.textContent.split(' - ')[0].trim().toUpperCase();
                    if (itemCode.includes(enteredCode)) {
                        item.style.display = 'block';
                        foundMatch = true;
                    } else {
                        item.style.display = 'none';
                    }
                });

                if (foundMatch) {
                    voucherList.classList.remove('hidden');
                } else {
                    voucherList.classList.add('hidden');
                }

                // Terapkan voucher
                fetch(`/spesialis/{{ $spesialis->id }}/apply-voucher`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            voucher_code: enteredCode
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            totalPriceElement.textContent =
                                `Rp${number_format(data.discountedPrice, 0, ',', '.')}`;
                            alert(data.message);
                        } else {
                            totalPriceElement.textContent =
                                `Rp${number_format(originalPrice, 0, ',', '.')}`;
                            alert(data.message || 'Voucher tidak valid.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat menerapkan voucher.');
                    });
            });

            // Fungsi untuk memformat angka
            function number_format(number, decimals, dec_point, thousands_sep) {
                number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
                var n = !isFinite(+number) ? 0 : +number,
                    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                    s = '',
                    toFixedFix = function(n, prec) {
                        var k = Math.pow(10, prec);
                        return '' + Math.round(n * k) / k;
                    };
                s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                if (s[0].length > 3) {
                    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                }
                if ((s[1] || '').length < prec) {
                    s[1] = s[1] || '';
                    s[1] += new Array(prec - s[1].length + 1).join('0');
                }
                return s.join(dec);
            }
        });

        // Fungsi untuk menyimpan pembayaran
        function savePayment(payment) {
            let payments = JSON.parse(localStorage.getItem('payments') || '[]');
            payments.push(payment);
            localStorage.setItem('payments', JSON.stringify(payments));
        }

        // Modifikasi event listener untuk form pembayaran
        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const nama = document.getElementById('nama').value;
            const bank = document.getElementById('bank').value;
            const kode = generatePaymentCode();
            const tanggal = new Date().toLocaleString('id-ID');

            const payment = {
                nama,
                bank,
                kode,
                tanggal,
                status: 'Menunggu Konfirmasi'
            };
            savePayment(payment);
            showPaymentCode(kode);

            // Reset form
            this.reset();
            closeModal('paymentMethodModal');
        });


        document.getElementById('paymentButton').addEventListener('click', function() {
            document.getElementById('paymentMethodModal').classList.remove('hidden');
        });

        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const nama = document.getElementById('nama').value;
            const bank = document.getElementById('bank').value;
            if (nama && bank) {
                const paymentCode = generatePaymentCode(bank);
                document.getElementById('paymentCode').textContent = paymentCode;
                document.getElementById('paymentMethodModal').classList.add('hidden');
                document.getElementById('paymentCodeModal').classList.remove('hidden');
            }
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('paymentCodeModal').classList.add('hidden');
        });

        function generatePaymentCode(bank) {
            const bankCodes = {
                'BCA': '001',
                'Mandiri': '002',
                'BNI': '003',
                'BRI': '004'
            };
            const randomDigits = Math.floor(1000000000 + Math.random() * 9000000000);
            return bankCodes[bank] + randomDigits;
        }

        //WHATSAPP
        window.closeModal = function(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const paymentButton = document.getElementById('paymentButton');
            const paymentMethodModal = document.getElementById('paymentMethodModal');
            const paymentCodeModal = document.getElementById('paymentCodeModal');
            const whatsappModal = document.getElementById('whatsappModal');
            const closeModal = document.getElementById('closeModal');
            const paymentForm = document.getElementById('paymentForm');
            const paymentCode = document.getElementById('paymentCode');
            const whatsappButton = document.getElementById('whatsappButton');
            const selectedSpesialisId = document.getElementById('selectedSpesialisId');
            const closeModalButton = document.getElementById('closeModal');

            // Fungsi untuk menyimpan ID spesialis yang dipilih
            function setSelectedSpesialis(id) {
                selectedSpesialisId.value = id;
            }

            // Event listener untuk tombol pembayaran
            paymentButton.addEventListener('click', function() {
                paymentMethodModal.classList.remove('hidden');
            });

            // Event listener untuk form pembayaran
            // paymentForm.addEventListener('submit', function(e) {
            //     e.preventDefault();
            //     paymentMethodModal.classList.add('hidden');
            //     paymentCodeModal.classList.remove('hidden');
            //     paymentCode.textContent = generatePaymentCode();
            // });

            // Event listener untuk tombol tutup pada modal kode pembayaran
            closeModal.addEventListener('click', function() {
                paymentCodeModal.classList.add('hidden');
                whatsappModal.classList.remove('hidden');
            });

            // Event listener untuk tombol tutup pada modal kode pembayaran
            closeModalButton.addEventListener('click', function() {
                closeModal('paymentCodeModal');
                whatsappModal.classList.remove('hidden');
            });

            // Fungsi untuk mengambil nomor WhatsApp dari database
            async function getWhatsAppNumber() {
                const id_spesialis = selectedSpesialisId.value;
                if (!id_spesialis) {
                    console.error('ID Spesialis tidak ditemukan');
                    return null;
                }
                try {
                    const response = await fetch(`/spesialis/${id_spesialis}/whatsapp`);
                    if (!response.ok) {
                        throw new Error('Gagal mengambil nomor WhatsApp');
                    }
                    const data = await response.json();
                    return data.whatsappNumber;
                } catch (error) {
                    console.error('Error:', error);
                    return null;
                }
            }

            // Event listener untuk tombol WhatsApp
            whatsappButton.addEventListener('click', async function(e) {
                e.preventDefault();
                const phoneNumber =
                    "{{ is_array($spesialis->noHP) ? implode(', ', $spesialis->noHP) : $spesialis->noHP }}";
                if (phoneNumber) {
                    const message = encodeURIComponent("Halo, saya ingin berkonsultasi dengan Anda.");
                    window.open(`https://wa.me/${phoneNumber}?text=${message}`, '_blank');
                } else {
                    alert('Maaf, nomor WhatsApp tidak tersedia saat ini.');
                }
            });

            // Fungsi untuk generate kode pembayaran
            function generatePaymentCode() {
                return Math.random().toString(36).substr(2, 10).toUpperCase();
            }

            // Pastikan ID spesialis diset saat halaman dimuat
            setSelectedSpesialis("{{ $spesialis->id_spesialis ?? '' }}");
        });
    </script>
</x-app-layout>
