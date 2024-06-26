<x-app-layout>
    <section class="ezy__contact11 light bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white overflow-hidden">
        <div class="bg-no-repeat bg-left-bottom bg-cover py-14"
            style="background-image: url(https://cdn.easyfrontend.com/pictures/contact/contact_11.png)">
            <div class="container px-4">
                <div class="grid grid-cols-12 py-6">
                    <div class="col-span-12 lg:col-span-4 mb-12 lg:mb-0">
                        <h2 class="text-2xl leading-none font-bold md:text-[40px] mb-6 text-white">Get in Touch</h2>
                        <p class="text-lg text-white">
                            It's easier to reach your savings goals when you have the right savings account. Take a look
                            and find the right one for you!
                        </p>
                    </div>
                    <div class="col-span-12 lg:col-span-5 lg:col-start-8">
                        <div
                            class="bg-white text-black dark:bg-[#162231] rounded-2xl border-[25px] dark:border-[#1C293A] border-[#F4F7FD] p-6 md:p-12">
                            <h2 class="text-2xl md:text-[45px] leading-none font-bold mb-4">Contact Us</h2>
                            <p class="text-lg mb-12">We list your menu online, help you process orders.</p>

                            <form class="">
                                <div class="mb-4">
                                    <label class="block font-medium text-sm text-indigo-900 dark:text-indigo-600">
                                        Name
                                    </label>
                                    <input type="text"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-white dark:text-indigo-600 text-indigo-900 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-full shadow-sm w-full"
                                        placeholder="Enter Name" />
                                </div>
                                <div class="mb-4">
                                    <label class="block font-medium text-sm text-indigo-900 dark:text-indigo-600">
                                        Email
                                    </label>
                                    <input type="email"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-white dark:text-indigo-600 text-indigo-900 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-full shadow-sm w-full"
                                        placeholder="Enter Email" />
                                </div>
                                <div class="mb-4">
                                    <label class="block font-medium text-sm text-indigo-900 dark:text-indigo-600">
                                        Message
                                    </label>
                                    <textarea name="message"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-white dark:text-indigo-600 text-indigo-900 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-lg shadow-sm w-full"
                                        placeholder="Enter Message" rows="4"></textarea>
                                </div>
                                <div class="text-start">
                                    <button type="submit"
                                        class="bg-blue-600 hover:bg-opacity-90 text-white px-8 py-3 rounded mb-4">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ezy__contact11-blank-card"></div>
    </section>

    {{-- @include('layouts.footer') --}}
</x-app-layout>
