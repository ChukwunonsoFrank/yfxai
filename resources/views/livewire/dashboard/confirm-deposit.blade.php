<div x-data class="px-4 lg:px-0 h-full">
    <div class="lg:flex lg:h-full">
        <livewire:dashboard.partials.desktop-navbar />
        <div class="lg:h-full lg:flex-1 lg:px-96 lg:pt-6">
            <div class="pt-2 lg:h-full lg:pb-24 lg:overflow-scroll scrollbar-hide">
                <div class="flex items-center mb-2">
                    <div class="flex-none">
                        <div wire:click="back()" class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-left-icon lucide-arrow-left">
                                <path d="m12 19-7-7 7-7" />
                                <path d="M19 12H5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-dim rounded-lg border border-[#323335]">
                    <div class="flex items-center gap-x-3 mb-3 text-left pb-2 lg:pt-4">
                        <div class="flex-none">
                            <h1 class="text-white text-lg md:text-xl lg:text-2xl font-bold">Deposit with
                                <img class="inline-block -mt-1 align-middle"
                                    src="{{ asset('storage/' . $this->iconUrl) }}">
                                {{ $this->method }}
                            </h1>
                        </div>
                    </div>

                    <div class="mb-3 text-left">
                        <p class="text-base font-medium text-[#a4a4a4]">Payment Details</p>
                    </div>

                    <div class="mb-4 text-left">
                        <p class="text-sm font-semibold text-white mb-2">Amount</p>
                        <div class="flex items-center">
                            <div class="flex-none text-wrap">
                                <p class="text-white font-light break-words">{{ $this->formatAmountToPay() }}</p>
                                <input id="amount" type="text" id="hs-trailing-icon" name="hs-trailing-icon"
                                    class="hidden" value="{{ $this->amountToPay }}">
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="text-sm font-semibold text-white mb-2">Wallet Address</p>
                        <div class="flex items-center gap-x-16">
                            <div class="flex-1 overflow-x-auto">
                                <input id="address" type="text" id="hs-trailing-icon" name="hs-trailing-icon"
                                    class="hidden" value="{{ $this->address }}">
                                <p class="text-white font-light break-words whitespace-normal"
                                    style="word-break: break-all;">{{ $this->address }}</p>
                            </div>
                            <div wire:click="storeDepositIntent()"
                                x-on:click="$store.confirmDepositPage.copyWalletAddress($wire)"
                                class="flex-none flex items-center gap-x-1.5 cursor-pointer">
                                <span class="text-sm text-white font-light">Copy</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="js-clipboard-default size-4 group-hover:rotate-6 transition lucide lucide-copy-icon lucide-copy">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2" />
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <a x-on:click="$store.confirmDepositPage.toggleQRModal($wire);">
                            <div class="w-full py-3 rounded-full flex items-center justify-center bg-dashboard gap-x-2">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-qr-code-icon lucide-qr-code">
                                        <rect width="5" height="5" x="3" y="3" rx="1" />
                                        <rect width="5" height="5" x="16" y="3" rx="1" />
                                        <rect width="5" height="5" x="3" y="16" rx="1" />
                                        <path d="M21 16h-3a2 2 0 0 0-2 2v3" />
                                        <path d="M21 21v.01" />
                                        <path d="M12 7v3a2 2 0 0 1-2 2H7" />
                                        <path d="M3 12h.01" />
                                        <path d="M12 3h.01" />
                                        <path d="M12 16v.01" />
                                        <path d="M16 12h1" />
                                        <path d="M21 12v.01" />
                                        <path d="M12 21v-1" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-white text-sm">Scan QR Code</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div x-cloak x-transition x-show="$store.confirmDepositPage.isQRModalOpen"
                        class="fixed top-0 left-0 h-svh w-full px-4 lg:px-96 pt-6 z-20">
                        <div class="absolute inset-0 h-svh w-full px-4 lg:px-96 pt-6 z-20 bg-dashboard opacity-85">
                        </div>
                        <div class="relative w-full h-full flex items-center justify-center z-30">
                            <div
                                class="max-w-sm mx-auto flex flex-col bg-dashboard border border-[#26252a] rounded-2xl pointer-events-auto">
                                <div class="p-6 overflow-y-auto">
                                    <div class="flex mb-6 items-center">
                                        <div class="flex-1">
                                            <h3 class="font-semibold text-white">
                                                Payment details QR code
                                            </h3>
                                        </div>
                                        <div class="flex-none">
                                            <div class="size-4 flex justify-center items-center cursor-pointer"
                                                x-on:click="$store.confirmDepositPage.toggleQRModal($wire)">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M18 6 6 18"></path>
                                                    <path d="m6 6 12 12"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mb-8">
                                        <div class="size-52 bg-[#FFFFFF] p-2 flex rounded-lg">
                                            <div wire:ignore class="size-52" id="qrcode"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4 text-left">
                                        <p class="text-sm font-semibold text-white mb-2">Amount</p>
                                        <div class="flex items-center">
                                            <div class="flex-none text-wrap">
                                                <p class="text-white font-light break-words">
                                                    {{ $this->formatAmountToPay() }}</p>
                                                <input id="amount" type="text" id="hs-trailing-icon"
                                                    name="hs-trailing-icon" class="hidden"
                                                    value="{{ $this->amountToPay }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <p class="text-sm font-semibold text-white mb-2">Wallet Address</p>
                                        <div class="flex items-center gap-x-16">
                                            <div class="flex-1 overflow-x-auto">
                                                <input id="address" type="text" id="hs-trailing-icon"
                                                    name="hs-trailing-icon" class="hidden"
                                                    value="{{ $this->address }}">
                                                <p class="text-white font-light break-words whitespace-normal"
                                                    style="word-break: break-all;">{{ $this->address }}</p>
                                            </div>
                                            <div wire:click="storeDepositIntent()"
                                                x-on:click="$store.confirmDepositPage.copyWalletAddress($wire)"
                                                class="flex-none flex items-center gap-x-1.5 cursor-pointer">
                                                <span class="text-sm text-white font-light">Copy</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="#FFFFFF"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="js-clipboard-default size-4 group-hover:rotate-6 transition lucide lucide-copy-icon lucide-copy">
                                                    <rect width="14" height="14" x="8" y="8" rx="2"
                                                        ry="2" />
                                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-cloak x-transition x-show="$store.confirmDepositPage.isClickOnPaidModalCopyOpen"
                        class="fixed top-0 left-0 h-svh w-full px-4 lg:px-96 pt-6 z-20">
                        <div class="absolute inset-0 h-svh w-full px-4 lg:px-96 pt-6 z-20 bg-dashboard opacity-85">
                        </div>
                        <div class="relative w-full h-full flex items-center justify-center z-30">
                            <div
                                class="max-w-sm mx-12 flex flex-col bg-dashboard border border-[#26252a] rounded-2xl pointer-events-auto">
                                <div class="p-4 pb-5 overflow-y-auto text-center">
                                    <div class="flex justify-center mb-4">
                                        <div>
                                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_595_377" style="mask-type:luminance"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="48"
                                                    height="48">
                                                    <path d="M48 0H0V48H48V0Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_595_377)">
                                                    <path
                                                        d="M23.9995 4.00024C35.0454 4.00024 43.9996 12.9542 43.9996 24.0003C43.9996 35.0463 35.0454 44.0002 23.9995 44.0002C12.9535 44.0002 3.99951 35.0463 3.99951 24.0003C3.99951 12.9542 12.9535 4.00024 23.9995 4.00024ZM23.9795 20.0002H21.9995C21.4898 20.0008 20.9995 20.196 20.6288 20.5459C20.2581 20.8959 20.035 21.3742 20.0052 21.883C19.9753 22.3919 20.1409 22.893 20.468 23.2839C20.7952 23.6748 21.2593 23.926 21.7655 23.9862L21.9995 24.0003V33.9802C21.9995 35.0201 22.7875 35.8803 23.7995 35.9883L24.0196 36.0003H24.9995C25.4202 36.0003 25.8302 35.8676 26.171 35.6213C26.512 35.3748 26.7664 35.0273 26.8984 34.628C27.0306 34.2286 27.0333 33.7978 26.9063 33.3968C26.7794 32.9957 26.5293 32.6448 26.1916 32.3943L25.9996 32.2683V22.0202C25.9996 20.9802 25.2114 20.1202 24.1996 20.0122L23.9795 20.0002ZM23.9995 14.0002C23.4691 14.0002 22.9604 14.2109 22.5853 14.586C22.2102 14.9611 21.9995 15.4698 21.9995 16.0002C21.9995 16.5307 22.2102 17.0394 22.5853 17.4144C22.9604 17.7895 23.4691 18.0002 23.9995 18.0002C24.5301 18.0002 25.0386 17.7895 25.4137 17.4144C25.7889 17.0394 25.9996 16.5307 25.9996 16.0002C25.9996 15.4698 25.7889 14.9611 25.4137 14.586C25.0386 14.2109 24.5301 14.0002 23.9995 14.0002Z"
                                                        fill="#3B71FF" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-white font-medium text-base mb-4">
                                        After sending your payment, click on <span class="font-bold">Yes, I’ve
                                            Paid</span>
                                        to confirm.
                                    </p>
                                    <div class="flex justify-center">
                                        <div class="flex-none">
                                            <button type="button"
                                                x-on:click="$store.confirmDepositPage.toggleClickOnPaidModal();"
                                                type="button"
                                                class="py-3 px-5 text-center text-sm font-semibold rounded-lg border border-transparent bg-accent text-white cursor-pointer hover:bg-accent focus:outline-hidden focus:bg-accent disabled:opacity-50 disabled:pointer-events-none">
                                                Okay
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-cloak x-transition x-show="$store.confirmDepositPage.isClickOnPaidModalQROpen"
                        class="fixed top-0 left-0 h-svh w-full px-4 lg:px-96 pt-6 z-20">
                        <div class="absolute inset-0 h-svh w-full px-4 lg:px-96 pt-6 z-20 bg-dashboard opacity-85">
                        </div>
                        <div class="relative w-full h-full flex items-center justify-center z-30">
                            <div
                                class="max-w-sm mx-12 flex flex-col bg-dashboard border border-[#26252a] rounded-2xl pointer-events-auto">
                                <div class="p-4 pb-5 overflow-y-auto text-center">
                                    <div class="flex justify-center mb-4">
                                        <div>
                                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_595_377" style="mask-type:luminance"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="48"
                                                    height="48">
                                                    <path d="M48 0H0V48H48V0Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_595_377)">
                                                    <path
                                                        d="M23.9995 4.00024C35.0454 4.00024 43.9996 12.9542 43.9996 24.0003C43.9996 35.0463 35.0454 44.0002 23.9995 44.0002C12.9535 44.0002 3.99951 35.0463 3.99951 24.0003C3.99951 12.9542 12.9535 4.00024 23.9995 4.00024ZM23.9795 20.0002H21.9995C21.4898 20.0008 20.9995 20.196 20.6288 20.5459C20.2581 20.8959 20.035 21.3742 20.0052 21.883C19.9753 22.3919 20.1409 22.893 20.468 23.2839C20.7952 23.6748 21.2593 23.926 21.7655 23.9862L21.9995 24.0003V33.9802C21.9995 35.0201 22.7875 35.8803 23.7995 35.9883L24.0196 36.0003H24.9995C25.4202 36.0003 25.8302 35.8676 26.171 35.6213C26.512 35.3748 26.7664 35.0273 26.8984 34.628C27.0306 34.2286 27.0333 33.7978 26.9063 33.3968C26.7794 32.9957 26.5293 32.6448 26.1916 32.3943L25.9996 32.2683V22.0202C25.9996 20.9802 25.2114 20.1202 24.1996 20.0122L23.9795 20.0002ZM23.9995 14.0002C23.4691 14.0002 22.9604 14.2109 22.5853 14.586C22.2102 14.9611 21.9995 15.4698 21.9995 16.0002C21.9995 16.5307 22.2102 17.0394 22.5853 17.4144C22.9604 17.7895 23.4691 18.0002 23.9995 18.0002C24.5301 18.0002 25.0386 17.7895 25.4137 17.4144C25.7889 17.0394 25.9996 16.5307 25.9996 16.0002C25.9996 15.4698 25.7889 14.9611 25.4137 14.586C25.0386 14.2109 24.5301 14.0002 23.9995 14.0002Z"
                                                        fill="#3B71FF" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-white font-medium text-base mb-4">
                                        After sending your payment, click on <span class="font-bold">Yes, I’ve
                                            Paid</span>
                                        to confirm.
                                    </p>
                                    <div class="flex justify-center">
                                        <div class="flex-none">
                                            <button type="button"
                                                x-on:click="$store.confirmDepositPage.isClickOnPaidModalQROpen = false; $store.confirmDepositPage.isClickOnPaidViewedOnce = true; $store.confirmDepositPage.isQRModalOpen = !$store.confirmDepositPage.isQRModalOpen;"
                                                type="button"
                                                class="py-3 px-5 text-center text-sm font-semibold rounded-lg border border-transparent bg-accent text-white cursor-pointer hover:bg-accent focus:outline-hidden focus:bg-accent disabled:opacity-50 disabled:pointer-events-none">
                                                Okay
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-sm text-white rounded-lg bg-dashboard p-4 mb-2" role="alert" tabindex="-1"
                        aria-labelledby="hs-with-description-label">
                        <div class="flex items-start">
                            <div class="shrink-0">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1668_24)">
                                        <path
                                            d="M9.99984 1.66675C14.6023 1.66675 18.3332 5.39758 18.3332 10.0001C18.3332 14.6026 14.6023 18.3334 9.99984 18.3334C5.39734 18.3334 1.6665 14.6026 1.6665 10.0001C1.6665 5.39758 5.39734 1.66675 9.99984 1.66675ZM9.9915 8.33341H9.1665C8.9541 8.33365 8.74981 8.41498 8.59536 8.56079C8.44092 8.7066 8.34797 8.90588 8.33553 9.11791C8.32308 9.32994 8.39207 9.53873 8.52839 9.70161C8.66472 9.86449 8.85809 9.96916 9.069 9.99425L9.1665 10.0001V14.1584C9.1665 14.5917 9.49484 14.9501 9.9165 14.9951L10.0082 15.0001H10.4165C10.5918 15.0001 10.7626 14.9448 10.9046 14.8422C11.0467 14.7395 11.1527 14.5947 11.2077 14.4283C11.2628 14.2619 11.2639 14.0824 11.211 13.9153C11.1581 13.7482 11.0539 13.602 10.9132 13.4976L10.8332 13.4451V9.17508C10.8332 8.74175 10.5048 8.38341 10.0832 8.33841L9.9915 8.33341ZM9.99984 5.83341C9.77882 5.83341 9.56686 5.92121 9.41058 6.07749C9.2543 6.23377 9.1665 6.44573 9.1665 6.66675C9.1665 6.88776 9.2543 7.09972 9.41058 7.256C9.56686 7.41228 9.77882 7.50008 9.99984 7.50008C10.2209 7.50008 10.4328 7.41228 10.5891 7.256C10.7454 7.09972 10.8332 6.88776 10.8332 6.66675C10.8332 6.44573 10.7454 6.23377 10.5891 6.07749C10.4328 5.92121 10.2209 5.83341 9.99984 5.83341Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1668_24">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="ms-2">
                                <div class="text-sm text-zinc-300">
                                    After sending your payment, click on <span class="font-bold">Yes, I’ve Paid</span>
                                    to confirm.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-sm text-white rounded-lg bg-dashboard p-4 mb-4 mt-3" role="alert"
                        tabindex="-1" aria-labelledby="hs-with-description-label">
                        <div class="flex items-start">
                            <div class="shrink-0">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1668_24)">
                                        <path
                                            d="M9.99984 1.66675C14.6023 1.66675 18.3332 5.39758 18.3332 10.0001C18.3332 14.6026 14.6023 18.3334 9.99984 18.3334C5.39734 18.3334 1.6665 14.6026 1.6665 10.0001C1.6665 5.39758 5.39734 1.66675 9.99984 1.66675ZM9.9915 8.33341H9.1665C8.9541 8.33365 8.74981 8.41498 8.59536 8.56079C8.44092 8.7066 8.34797 8.90588 8.33553 9.11791C8.32308 9.32994 8.39207 9.53873 8.52839 9.70161C8.66472 9.86449 8.85809 9.96916 9.069 9.99425L9.1665 10.0001V14.1584C9.1665 14.5917 9.49484 14.9501 9.9165 14.9951L10.0082 15.0001H10.4165C10.5918 15.0001 10.7626 14.9448 10.9046 14.8422C11.0467 14.7395 11.1527 14.5947 11.2077 14.4283C11.2628 14.2619 11.2639 14.0824 11.211 13.9153C11.1581 13.7482 11.0539 13.602 10.9132 13.4976L10.8332 13.4451V9.17508C10.8332 8.74175 10.5048 8.38341 10.0832 8.33841L9.9915 8.33341ZM9.99984 5.83341C9.77882 5.83341 9.56686 5.92121 9.41058 6.07749C9.2543 6.23377 9.1665 6.44573 9.1665 6.66675C9.1665 6.88776 9.2543 7.09972 9.41058 7.256C9.56686 7.41228 9.77882 7.50008 9.99984 7.50008C10.2209 7.50008 10.4328 7.41228 10.5891 7.256C10.7454 7.09972 10.8332 6.88776 10.8332 6.66675C10.8332 6.44573 10.7454 6.23377 10.5891 6.07749C10.4328 5.92121 10.2209 5.83341 9.99984 5.83341Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1668_24">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="ms-2">
                                <div class="text-sm text-zinc-300">
                                    Only send {{ $this->method }} to this wallet address.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:px-52">
                        <a wire:click="createDeposit()">
                            <button type="button" wire:loading.attr="disabled"
                                class="py-3 cursor-pointer px-4 w-full md:px-6 md:py-3 text-center gap-x-2 text-sm md:text-base font-semibold rounded-lg bg-accent text-white focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none">
                                <i wire:loading class="fa-solid fa-circle-notch fa-spin"></i>
                                <span wire:loading.remove>Yes, I've paid</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let lastToast = null;

    function toast(type, message) {
        if (lastToast) {
            lastToast.hideToast();
        }

        let toastMarkup = '';

        if (type === 'info') {
            toastMarkup = `
            <div class="flex items-center p-4">
                <div class="shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info-icon lucide-info"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                </div>
                <div class="ms-3 flex-1">
                    <p class="text-xs font-semibold text-white">${message}</p>
                </div>
            </div>
        `;
        }

        if (type === 'deposit-error') {
            toastMarkup = `
            <div class="flex items-center p-4">
                <div class="shrink-0">
                    <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-alert-icon lucide-shield-alert"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="M12 8v4"/><path d="M12 16h.01"/></svg>
                </div>
                <div class="ms-3 flex-1">
                    <p class="text-xs font-semibold text-white">${message}</p>
                </div>
            </div>
            `;
        }

        lastToast = Toastify({
            text: toastMarkup,
            className: "hs-toastify-on:opacity-100 opacity-0 absolute top-0 start-1/2 -translate-x-1/2 z-90 w-4/5 md:w-1/2 lg:w-1/4 transition-all duration-300 bg-dim border border-[#26252a] text-sm text-white rounded-xl shadow-lg [&>.toast-close]:hidden",
            duration: 4000,
            close: true,
            escapeMarkup: false
        });

        lastToast.showToast();
    }

    document.addEventListener('alpine:init', () => {
        Alpine.store('confirmDepositPage', {
            isQRModalOpen: false,
            isClickOnPaidModalCopyOpen: false,
            isClickOnPaidModalQROpen: false,
            isClickOnPaidViewedOnce: false,
            init() {
                this.generateQRCode()
            },
            generateQRCode() {
                var qrcode = new QRCode("qrcode");
                var address = new URLSearchParams(window.location.search).get('address');
                qrcode.makeCode(address);
            },
            toggleClickOnPaidModal() {
                this.isClickOnPaidModalCopyOpen = !this.isClickOnPaidModalCopyOpen;
            },
            copyWalletAddress(wire) {
                var copyText = document.getElementById("address");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                navigator.clipboard.writeText(copyText.value);
                toast('info', 'Copied');
                if (wire.hasUserMadeTwoSuccessfulDeposits) {
                    return;
                }
                setTimeout(() => {
                    if (this.isClickOnPaidViewedOnce) {
                        return;
                    }
                    // Only show the modal if QR modal is not open
                    if (!this.isQRModalOpen) {
                        this.isClickOnPaidModalCopyOpen = true;
                    }
                    this.isClickOnPaidViewedOnce = true;
                }, 1000);
            },
            toggleQRModal(wire) {
                if (wire.hasUserMadeTwoSuccessfulDeposits) {
                    this.isQRModalOpen = !this.isQRModalOpen;
                    return;
                }
                if (this.isClickOnPaidViewedOnce) {
                    this.isQRModalOpen = !this.isQRModalOpen;
                    return;
                }
                this.isClickOnPaidModalQROpen = true;
            },
        })
    })
</script>

@script
    <script>
        $wire.on('deposit-error', (event) => {
            toast('deposit-error', event.message);
        });
    </script>
@endscript
