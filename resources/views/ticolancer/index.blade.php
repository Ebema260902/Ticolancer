@extends('ticolancer.layout')
@section ('content')

{{-- Hero --}}
<div style="background-image: url(https://i.postimg.cc/FKf3877p/20201222135502-rana-cr.webp);" class=" bg-cover h-[800px] max-sm:h-[600px] bg-bottom flex items-center justify-center relative">
    <div class="absolute inset-0 bg-blue opacity-50"></div>
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class=" flex flex-col w-[90vw] gap-[20px] rad z-10">
        <h1 class="w-fit text-[72px] max-sm:text-[48px] font-light font-main text-white">Bienvenido a, <span class="font-secondary text-white">Ticolancer</span></h1>
        <p class="text-[18px] max-sm:text-[14px] font-light text-white w-[800px] max-sm:w-[90vw] ">Conecta con los mejores freelancers de Costa Rica en Ticolancer. Encuentra talento local para llevar tu proyecto al siguiente nivel o ofrece tus servicios y destaca en la comunidad. ¡Es momento de crecer juntos!</p>
        <div class="flex flex-row gap-[20px]">
            <a class="rounded-[10px] text-blue px-[20px] py-[10px] bg-white font-semibold hover:translate-y-[-5px] transition-all duration-500 ease-out hover:text-green" href="{{ route('searchGigs') }}">Ver servicios</a>
            <a class="rounded-[10px] px-[20px] py-[10px] text-white font-semibold border-solid border-[1px] border-white hover:translate-y-[-5px] transition-all duration-500 ease-out hover:bg-white hover:text-green" href="{{ route('nosotros') }}">Leer más</a>
        </div>
    </div>
</div>
{{-- Hero end --}}

{{-- Find service --}}
<div class="flex justify-center items-center bg-blue p-[40px] gap-[40px] flex-col">
    <h2 class="text-white font-light text-[48px] max-sm:text-[32px] text-center">Encuentra el servicio <br> <span class="font-secondary text-green">freelance</span> adecuado de <br> inmediato</h2>
    <form action="{{ route('searchGigs') }}" method="GET" >
        @csrf
        <div class="relative">
            <input name="search" class="outline-none rounded-[10px] text-[18px] max-sm:text-[14px] px-[20px] py-[16px] border-solid border-[1px] border-white w-[50vw] max-sm:w-[90vw]" type="text" placeholder="Buscar un servicio">
            <div class="bg-blue w-[40px] h-[40px] absolute flex justify-center items-center right-[10px] top-[50%] translate-y-[-50%] rounded-[8px]">
                <button type="submit">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.2244 7.93021C16.2626 9.76881 15.774 11.4456 14.6675 12.923C14.5131 13.1289 14.5395 13.2372 14.7073 13.4043C16.3018 14.9915 17.8914 16.5834 19.475 18.1814C19.6527 18.3607 19.8149 18.5707 19.9283 18.7947C20.0864 19.1074 19.969 19.5362 19.7145 19.7661C19.4496 20.0057 18.9957 20.0785 18.6959 19.9024C18.5229 19.8007 18.3611 19.67 18.2185 19.5278C16.6326 17.9459 15.0468 16.3637 13.4743 14.7684C13.2469 14.5378 13.1003 14.5304 12.8403 14.7236C11.3088 15.8606 9.56173 16.3519 7.67984 16.2252C4.84023 16.0342 2.6185 14.7143 1.14449 12.2646C-1.03717 8.6387 -0.00738242 3.88461 3.4473 1.45264C4.65509 0.602258 6.00608 0.126817 7.4804 0.0238252C9.80279 -0.138285 11.8443 0.531004 13.5824 2.10201C15.3528 3.70227 16.1642 5.78948 16.2241 7.93021H16.2244ZM8.12437 1.81513C4.67497 1.77779 1.83878 4.58843 1.81704 8.05094C1.79529 11.5455 4.50629 14.4255 8.13027 14.4255C11.6865 14.4255 14.418 11.5819 14.4205 8.1281C14.4233 4.60866 11.6365 1.81513 8.12406 1.81513H8.12437Z" fill="#F8FBFF" />
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>
{{-- Find service end --}}

{{-- Services --}}
<div class="flex justify-center items-center m-auto py-[40px] gap-[20px] max-sm:flex-col max-sm:grid max-sm:grid-cols-2 max-sm:w-[90vw]">
    {{-- Marketing digital --}}
    <div class="flex flex-col gap-[20px] p-[20px] w-[160px] h-[160px] shadow-[0_10px_15px_0px_rgba(17,17,26,0.05)] border-solid border-[0.5px] border-blue border-opacity-10 rounded-[16px] hover:bg-[radial-gradient(ellipse_at_center,_rgba(0,196,142,0.2)_0%,_#F8FBFF_75%)] transition-all duration-500 ease-out">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_31_113)">
                <path d="M10.7435 14.9737C10.7435 11.1925 10.7756 7.41094 10.7291 3.63038C10.7081 1.93022 11.6911 0.097528 13.8752 0.0199798C14.9154 -0.0169946 15.9939 -0.0261564 16.9977 0.202889C18.3962 0.521589 19.2469 1.80031 19.2659 3.24984C19.28 4.31654 19.2695 5.38356 19.2695 6.45058C19.2695 13.1341 19.2695 19.818 19.2695 26.5015C19.2695 27.6487 18.9125 28.6519 17.9335 29.306C17.518 29.5835 16.9977 29.8073 16.5076 29.8479C15.5122 29.9307 14.4975 29.9522 13.5051 29.8547C11.8544 29.6924 10.7536 28.3705 10.7481 26.6465C10.7369 23.1319 10.7441 19.6177 10.7438 16.1032C10.7438 15.7266 10.7438 15.35 10.7438 14.9737H10.7435ZM11.785 14.9662C11.785 18.7611 11.7843 22.5564 11.7866 26.3513C11.7866 26.6016 11.7997 26.8529 11.8239 27.1019C11.9047 27.934 12.4652 28.7039 13.2826 28.7769C14.4255 28.879 15.5891 28.8594 16.7353 28.7769C17.4754 28.7239 17.9015 28.1284 18.122 27.4593C18.2313 27.1271 18.2215 26.7469 18.2218 26.3886C18.2267 18.8298 18.2257 11.2713 18.2248 3.71251C18.2248 3.50866 18.214 3.30514 18.2104 3.10129C18.1888 1.84841 17.3491 1.04708 16.0344 0.999966C15.3453 0.975098 14.6536 0.973135 13.9645 1.00062C13.0333 1.03759 12.2715 1.4057 11.9443 2.33203C11.8076 2.71879 11.7925 3.16281 11.7912 3.58098C11.7804 7.37593 11.785 11.1712 11.7847 14.9662H11.785Z" fill="black" />
                <path d="M21.4691 17.092C21.4691 13.9544 21.4668 10.8168 21.4701 7.67925C21.4721 5.65416 22.8022 4.31621 24.8253 4.30378C25.5625 4.2992 26.3039 4.26451 27.0365 4.3257C28.7822 4.47131 29.9696 5.83347 29.9925 7.67827C30.0076 8.88599 29.9958 10.0944 29.9958 11.3021C29.9958 16.3381 29.9984 21.3739 29.9938 26.4099C29.9929 27.5797 29.6591 28.6251 28.6477 29.3109C28.2698 29.5671 27.8009 29.8011 27.3595 29.8302C26.2692 29.9019 25.1551 29.9657 24.0799 29.8194C22.453 29.5982 21.4865 28.3542 21.4737 26.6929C21.4593 24.7634 21.4698 22.8335 21.4694 20.904C21.4694 19.6331 21.4694 18.3626 21.4694 17.0917L21.4691 17.092ZM28.9304 17.1607C28.9304 15.1536 28.9314 13.1462 28.9301 11.1391C28.9291 9.85321 28.9409 8.56729 28.917 7.28169C28.8987 6.30432 28.1916 5.4706 27.228 5.39796C26.2323 5.32303 25.2258 5.35509 24.2258 5.38716C23.5171 5.40974 23.0184 5.83773 22.7429 6.45647C22.5836 6.81509 22.5064 7.23981 22.5054 7.63507C22.4913 13.9233 22.4949 20.2116 22.4972 26.4999C22.4972 26.7342 22.5001 26.9734 22.545 27.2021C22.7056 28.0247 23.1591 28.6879 24.0033 28.7789C25.0991 28.8967 26.2175 28.8793 27.3209 28.8208C28.0335 28.7831 28.5191 28.275 28.7632 27.6242C28.8961 27.2705 28.9219 26.8608 28.9232 26.476C28.9353 23.3711 28.9301 20.2663 28.9301 17.1611L28.9304 17.1607Z" fill="black" />
                <path d="M8.54398 21.3869C8.54398 23.0488 8.54463 24.7107 8.54398 26.3723C8.54267 28.56 7.45241 29.7667 5.27321 29.9143C4.47908 29.9679 3.67219 29.9441 2.87871 29.8714C1.21192 29.7186 0.0516378 28.4605 0.031351 26.6903C-0.00922273 23.1633 -0.0102043 19.6354 0.0280789 16.1084C0.0493474 14.1661 1.43507 12.8599 3.37934 12.8648C4.29977 12.8671 5.24573 12.8262 6.13475 13.0166C7.69193 13.3501 8.52958 14.5136 8.54136 16.1192C8.55445 17.875 8.5443 19.6308 8.5443 21.3869H8.54398ZM7.51851 21.4203C7.51851 19.6485 7.52963 17.8763 7.51458 16.1045C7.50411 14.8794 6.85068 14.0349 5.73719 13.939C4.77291 13.8563 3.79129 13.8612 2.82636 13.9377C1.82117 14.0176 1.10295 14.834 1.0987 15.8431C1.083 19.5592 1.08659 23.2756 1.10197 26.992C1.10557 27.8722 1.72498 28.6598 2.59829 28.7929C3.42842 28.9196 4.2821 28.9261 5.12531 28.9225C6.72176 28.9156 7.51295 28.098 7.51785 26.5012C7.52309 24.8076 7.51916 23.1139 7.51851 21.4203Z" fill="black" />
            </g>
            <defs>
                <clipPath id="clip0_31_113">
                    <rect width="30" height="29.9437" fill="white" />
                </clipPath>
            </defs>
        </svg>
        <h5 class="font-medium text-[16px]">Marketing digital</h5>
    </div>
    {{-- Marketing digital end --}}

    {{-- Programación y tegnología --}}
    <div class="flex flex-col gap-[20px] p-[20px] w-[160px] h-[160px] shadow-[0_10px_15px_0px_rgba(17,17,26,0.05)] border-solid border-[0.5px] border-blue border-opacity-10 rounded-[16px] hover:bg-[radial-gradient(ellipse_at_center,_rgba(0,196,142,0.2)_0%,_#F8FBFF_75%)] transition-all duration-500 ease-out">
        <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_31_212)">
                <path d="M14.9678 26.2797C11.323 26.2797 7.67844 26.2803 4.03359 26.2794C3.10344 26.2794 2.2374 26.0662 1.49039 25.4818C0.490901 24.6995 0.00833613 23.6577 0.00710901 22.4026C0.000666631 16.2253 -0.00638931 10.0483 0.0104836 3.87099C0.0156988 1.99933 1.07716 0.639679 2.85617 0.14331C3.22124 0.0414588 3.61545 0.00740626 3.99647 0.0067927C11.3408 -0.000876794 18.6854 -0.00241069 26.0297 0.0037249C27.9382 0.0052588 29.3521 1.05076 29.8592 2.83745C29.9663 3.21448 29.9927 3.62495 29.9933 4.02009C30.0013 10.1008 30.0016 16.1818 29.9973 22.2624C29.9961 24.2519 28.9742 25.6226 27.0838 26.1481C26.7068 26.253 26.2969 26.2733 25.9021 26.2742C22.2575 26.2834 18.6127 26.2794 14.9681 26.2794L14.9678 26.2797ZM14.978 25.3456C18.6642 25.3456 22.3502 25.3496 26.0365 25.344C27.9416 25.341 29.0901 24.1847 29.0908 22.2781C29.0932 16.1833 29.0932 10.0882 29.0908 3.9934C29.0898 2.11284 27.9394 0.94063 26.0625 0.93879C18.6903 0.931734 11.3181 0.9302 3.94585 0.948607C3.46482 0.949834 2.94882 1.05291 2.51043 1.2471C1.34344 1.76403 0.912723 2.76229 0.912723 3.98787C0.912723 10.0416 0.932971 16.0952 0.900145 22.1486C0.890635 23.8908 1.9297 25.3987 4.12655 25.3621C7.74287 25.3023 11.361 25.3459 14.9783 25.3459L14.978 25.3456Z" fill="black" />
                <path d="M21.9899 13.1912C21.615 12.8418 21.3392 12.5955 21.0757 12.3372C19.9373 11.2211 18.8022 10.101 17.6662 8.98252C17.6367 8.95369 17.6073 8.92454 17.5784 8.8954C17.348 8.66071 17.256 8.37111 17.4922 8.12661C17.7312 7.87934 18.0254 7.96923 18.2595 8.19686C18.5454 8.4745 18.823 8.76072 19.1047 9.04265C20.2793 10.2201 21.4549 11.3966 22.6286 12.5749C23.0808 13.0289 23.0799 13.2538 22.6253 13.71C21.2086 15.1313 19.7909 16.5517 18.373 17.9718C18.2957 18.0491 18.2175 18.1743 18.13 18.1832C17.9159 18.2052 17.6113 18.2537 17.502 18.1393C17.3919 18.0239 17.4462 17.7208 17.4821 17.5095C17.4993 17.4085 17.6389 17.3266 17.7266 17.2401C18.9997 15.9863 20.272 14.7316 21.55 13.4827C21.6568 13.3784 21.8025 13.3136 21.9902 13.1915L21.9899 13.1912Z" fill="black" />
                <path d="M8.07538 13.0523C8.53555 13.5244 8.90307 13.9128 9.28256 14.2889C10.2882 15.2853 11.299 16.2765 12.3077 17.2696C12.3273 17.2889 12.3473 17.3076 12.3666 17.3272C12.659 17.6279 12.7213 17.9614 12.5228 18.1638C12.3227 18.3681 11.9773 18.3178 11.6862 18.027C10.5483 16.8907 9.41386 15.751 8.27816 14.6125C7.93825 14.272 7.59373 13.9364 7.25965 13.59C6.96422 13.2839 6.95809 12.9952 7.26057 12.6906C8.7417 11.1981 10.2284 9.71081 11.7165 8.22508C11.9856 7.95634 12.3537 7.90603 12.5166 8.12231C12.7387 8.41682 12.6378 8.68648 12.3939 8.92638C11.0806 10.2173 9.77003 11.5113 8.45333 12.7992C8.34657 12.9038 8.20146 12.9691 8.07507 13.0523H8.07538Z" fill="black" />
            </g>
            <defs>
                <clipPath id="clip0_31_212">
                    <rect width="30" height="26.2806" fill="white" />
                </clipPath>
            </defs>
        </svg>
        <h5 class="font-medium text-[16px]">Programación y tegnología</h5>
    </div>
    {{-- Programación y tegnología end --}}

    {{-- Video y animación --}}
    <div class="flex flex-col gap-[20px] p-[20px] w-[160px] h-[160px] shadow-[0_10px_15px_0px_rgba(17,17,26,0.05)] border-solid border-[0.5px] border-blue border-opacity-10 rounded-[16px] hover:bg-[radial-gradient(ellipse_at_center,_rgba(0,196,142,0.2)_0%,_#F8FBFF_75%)] transition-all duration-500 ease-out">
        <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_31_76)">
                <path d="M0.00240756 10.0149C0.00240756 7.83952 -0.00436667 5.6639 0.00481132 3.4885C0.0107115 2.10132 0.597666 1.01591 1.84784 0.395083C2.33209 0.154708 2.9221 0.0251232 3.46535 0.0214083C7.81593 -0.00787387 12.1672 -0.00153669 16.518 0.00785982C18.5398 0.0122303 19.9855 1.46782 19.9923 3.52281C20.0063 7.84936 20.0047 12.1759 19.9923 16.5022C19.9875 18.2034 19.0629 19.4123 17.4415 19.8784C17.1296 19.968 16.7918 20.001 16.4658 20.0017C12.1514 20.0095 7.83713 20.0102 3.52282 20.0056C1.44663 20.0032 0.0074336 18.5535 0.00328165 16.4681C-0.000870296 14.3172 0.00240756 12.1661 0.00240756 10.0151V10.0149ZM19.1783 9.96729C19.1783 7.82925 19.1831 5.69144 19.1768 3.5534C19.1719 1.89 18.1549 0.831475 16.4918 0.824701C12.1549 0.807656 7.81768 0.805471 3.48086 0.825793C1.82183 0.833442 0.803296 1.91054 0.802641 3.56608C0.801111 7.8664 0.800455 12.1667 0.803078 16.4671C0.80417 18.1208 1.87909 19.2067 3.53025 19.2086C7.84281 19.2139 12.1554 19.2176 16.4677 19.199C16.8829 19.1973 17.3265 19.1033 17.707 18.9375C18.774 18.4722 19.1728 17.5647 19.1761 16.4542C19.1827 14.2919 19.1781 12.1294 19.1781 9.96707L19.1783 9.96729Z" fill="black" />
                <path d="M21.6928 14.23C21.8678 14.3189 21.9863 14.3751 22.101 14.438C23.8247 15.3816 25.5434 16.3344 27.2758 17.2616C27.5424 17.4043 27.8809 17.5216 28.1696 17.4912C28.8457 17.4202 29.1927 16.9408 29.1947 16.2009C29.1988 14.539 29.196 12.8771 29.196 11.215C29.196 8.75883 29.1973 6.30263 29.1951 3.84642C29.1945 3.07503 28.8459 2.58816 28.162 2.52785C27.8709 2.50206 27.533 2.61351 27.2669 2.75664C25.5366 3.68777 23.8201 4.64491 22.0988 5.59242C21.9845 5.65536 21.8659 5.70999 21.6939 5.79631C21.6939 5.50764 21.6775 5.26661 21.7024 5.02994C21.7116 4.94385 21.8023 4.83786 21.8842 4.79219C23.6119 3.83047 25.3299 2.85017 27.0785 1.92822C28.4712 1.19398 29.9862 2.12271 29.9906 3.69258C30.0026 7.90834 30.0028 12.1243 29.9901 16.3403C29.9855 17.8763 28.4926 18.8131 27.1307 18.1036C25.3561 17.1792 23.6189 16.1825 21.8698 15.2096C21.7902 15.1653 21.71 15.0532 21.7007 14.9649C21.6766 14.7405 21.6926 14.5117 21.6926 14.23H21.6928Z" fill="black" />
            </g>
            <defs>
                <clipPath id="clip0_31_76">
                    <rect width="30" height="20.0084" fill="white" />
                </clipPath>
            </defs>
        </svg>
        <h5 class="font-medium text-[16px]">Video y animación</h5>
    </div>
    {{-- Video y animación end --}}

    {{-- Música y Audio --}}
    <div class="flex flex-col gap-[20px] p-[20px] w-[160px] h-[160px] shadow-[0_10px_15px_0px_rgba(17,17,26,0.05)] border-solid border-[0.5px] border-blue border-opacity-10 rounded-[16px] hover:bg-[radial-gradient(ellipse_at_center,_rgba(0,196,142,0.2)_0%,_#F8FBFF_75%)] transition-all duration-500 ease-out">
        <svg width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_31_64)">
                <path d="M29.1492 14.8016C28.9593 10.1591 27.063 6.37219 23.2998 3.57818C18.5259 0.0334995 12.1648 0.104545 7.68003 2.93654C3.31453 5.69302 1.11301 9.69927 0.856528 14.7949C0.898083 14.8271 0.939191 14.8592 0.980746 14.8914C1.07637 14.8052 1.18003 14.727 1.26582 14.6318C2.11882 13.6823 3.22203 13.2028 4.45751 13.1591C5.94142 13.1063 7.39674 13.9714 7.43651 15.9843C7.48477 18.4388 7.48119 20.8954 7.43651 23.3503C7.39987 25.3776 5.76001 26.5773 3.77163 26.109C1.37753 25.5456 0.0236411 23.8387 0.0294499 21.3798C0.0352586 18.9245 -0.0670649 16.4629 0.0790477 14.0156C0.453489 7.75245 4.56251 2.58757 10.4164 0.735912C17.3847 -1.46829 24.474 1.3999 28.1139 7.74261C29.3449 9.88783 29.9227 12.2243 29.974 14.6796C30.0223 16.9897 29.9906 19.3011 29.983 21.6121C29.974 24.2659 27.8083 26.3163 25.155 26.1966C23.9365 26.1416 22.853 25.1921 22.642 23.9812C22.5956 23.7136 22.5701 23.4392 22.5697 23.1675C22.5643 20.8244 22.5576 18.4812 22.5692 16.1385C22.579 14.1197 24.0317 12.9088 26.0259 13.2163C27.0786 13.3785 27.9803 13.8154 28.7082 14.5956C28.8034 14.6979 28.8686 14.828 28.9477 14.945C29.0152 14.8977 29.0826 14.8499 29.1501 14.8025L29.1492 14.8016ZM6.6005 19.6948C6.6005 18.4911 6.6005 17.2873 6.6005 16.084C6.6005 16.0518 6.6005 16.0196 6.5996 15.9879C6.56609 14.7828 5.70237 13.9146 4.60407 13.983C2.4803 14.1148 0.898529 15.7672 0.878869 17.8896C0.867698 19.109 0.866805 20.3293 0.878869 21.5487C0.897189 23.4379 2.28191 25.0268 4.15143 25.3244C5.6425 25.5621 6.59335 24.7623 6.5996 23.2578C6.60452 22.0701 6.6005 20.8825 6.6005 19.6948ZM23.4168 19.651C23.4168 20.9026 23.4043 22.1546 23.4204 23.4062C23.4361 24.6247 24.1841 25.3499 25.3865 25.349C27.3681 25.3476 29.092 23.6559 29.134 21.6394C29.1595 20.4205 29.1452 19.2002 29.1385 17.9808C29.1273 15.9486 27.9151 14.4799 25.9249 14.0742C24.4446 13.7721 23.4271 14.5853 23.4177 16.0885C23.4101 17.2761 23.4164 18.4633 23.4168 19.651Z" fill="black" />
            </g>
            <defs>
                <clipPath id="clip0_31_64">
                    <rect width="30" height="26.21" fill="white" />
                </clipPath>
            </defs>
        </svg>
        <h5 class="font-medium text-[16px]">Música y Audio</h5>
    </div>
    {{-- Música y Audio end --}}

    {{-- Servicios de AI --}}
    <div class="flex flex-col gap-[20px] p-[20px] w-[160px] h-[160px] shadow-[0_10px_15px_0px_rgba(17,17,26,0.05)] border-solid border-[0.5px] border-blue border-opacity-10 rounded-[16px] hover:bg-[radial-gradient(ellipse_at_center,_rgba(0,196,142,0.2)_0%,_#F8FBFF_75%)] transition-all duration-500 ease-out">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_31_71)">
                <path d="M20.1793 26.2997H15.4509C15.4509 27.2829 15.4509 28.2429 15.4509 29.2031C15.4509 29.5486 15.5008 29.9353 15.0171 30.0014C14.6943 30.0457 14.5503 29.7806 14.55 29.2C14.5498 28.2504 14.55 27.3011 14.55 26.3137H9.82109C9.82109 26.4403 9.82109 26.5844 9.82109 26.7284C9.82109 27.5822 9.81997 28.4362 9.82165 29.29C9.82221 29.6234 9.80007 29.9527 9.37585 30.0022C9.06174 30.039 8.91492 29.7955 8.9138 29.2791C8.91184 28.439 8.91324 27.599 8.91324 26.7589C8.91324 26.6115 8.91324 26.4639 8.91324 26.2669C7.41052 26.3344 5.98794 26.2817 4.86153 25.1696C3.72868 24.0513 3.67236 22.6299 3.74381 21.1297C3.567 21.1182 3.42298 21.1008 3.27896 21.1005C2.39772 21.0977 1.51649 21.1028 0.635259 21.0972C0.197585 21.0944 -0.0268558 20.9274 0.00256526 20.6248C0.0392716 20.2501 0.307984 20.1801 0.627413 20.1809C1.64398 20.1843 2.66055 20.182 3.70458 20.182V15.4587C3.07357 15.4587 2.45825 15.4587 1.84293 15.4587C1.40217 15.4587 0.961133 15.4699 0.521217 15.4528C0.237934 15.4416 -0.00808238 15.3259 0.00452667 14.9902C0.0165753 14.6671 0.235412 14.5506 0.53943 14.5514C1.43439 14.5539 2.32935 14.552 3.2246 14.5517C3.37366 14.5517 3.52273 14.5517 3.7015 14.5517V9.82861C2.77543 9.82861 1.85722 9.82861 0.939277 9.82861C0.801698 9.82861 0.663279 9.83646 0.526261 9.82581C0.236253 9.8034 0.00480687 9.68459 0.00508707 9.359C0.00508707 9.0292 0.229808 8.91376 0.530744 8.91348C1.41198 8.91236 2.29321 8.91208 3.17444 8.91152C3.33752 8.91152 3.50059 8.91152 3.73232 8.91152C3.73232 8.4702 3.7242 8.06447 3.73372 7.65902C3.76959 6.12099 4.41349 4.93238 5.77583 4.17444C6.35332 3.85333 6.99162 3.75133 7.64421 3.73648C8.04237 3.72724 8.44082 3.7348 8.8883 3.7348C8.89755 3.5664 8.91184 3.42154 8.91212 3.27667C8.91436 2.39516 8.91296 1.51393 8.91408 0.632418C8.91436 0.325878 8.95022 0.0336281 9.34391 0.00308617C9.6454 -0.0201705 9.81717 0.208474 9.81941 0.638862C9.82445 1.65459 9.82109 2.67032 9.82109 3.71015H14.55C14.55 2.99087 14.55 2.29261 14.55 1.59435C14.55 1.27772 14.5475 0.960813 14.5509 0.644186C14.5554 0.209034 14.7148 -0.0235329 15.0115 0.00252577C15.392 0.0358697 15.452 0.314109 15.4512 0.628495C15.4495 1.26203 15.4509 1.89556 15.4509 2.5291C15.4509 2.91213 15.4509 3.29517 15.4509 3.70622H20.1793C20.1793 2.83676 20.1793 1.97402 20.1793 1.11128C20.1793 0.918503 20.1695 0.724884 20.1829 0.532946C20.2025 0.248822 20.3028 0.00364657 20.6377 0.00476737C20.972 0.00588818 21.081 0.240136 21.0824 0.533787C21.0868 1.44276 21.0849 2.35173 21.0854 3.2607C21.0854 3.39632 21.0854 3.53222 21.0854 3.73508C21.5256 3.73508 21.9317 3.72836 22.3374 3.7362C23.9317 3.76731 25.1699 4.4325 25.8533 5.89627C26.1066 6.43874 26.1661 7.08096 26.2585 7.6862C26.316 8.06195 26.2692 8.45367 26.2692 8.88546C26.4384 8.89498 26.5836 8.91012 26.7284 8.9104C27.6234 8.91292 28.5183 8.9132 29.4136 8.9118C29.7193 8.91124 29.9877 8.98857 29.9919 9.34695C29.9964 9.72018 29.7229 9.82609 29.4021 9.82749C28.5209 9.83142 27.6396 9.82889 26.7584 9.82917C26.6107 9.82917 26.4628 9.82917 26.2924 9.82917V14.5326C26.4364 14.5391 26.5816 14.5514 26.7267 14.5517C27.6217 14.5536 28.5167 14.5562 29.4119 14.5508C29.724 14.5489 29.9818 14.636 29.9925 14.9854C30.0042 15.3687 29.7134 15.4556 29.4007 15.4573C28.3827 15.4629 27.3645 15.4593 26.3078 15.4593V20.1829C26.493 20.1829 26.6931 20.1829 26.8935 20.1829C27.7058 20.1829 28.5183 20.1862 29.3306 20.1812C29.6599 20.1792 29.9547 20.2266 29.997 20.6267C30.0295 20.9355 29.7927 21.0966 29.3208 21.0986C28.4671 21.1025 27.6133 21.1 26.7598 21.1C26.6121 21.1 26.4642 21.1 26.2636 21.1C26.3227 22.6103 26.2767 24.0491 25.1341 25.1741C24.0065 26.2843 22.5834 26.3327 21.0857 26.27C21.0857 26.9926 21.0857 27.6634 21.0857 28.3342C21.0857 28.706 21.0843 29.0779 21.0849 29.4497C21.0854 29.745 20.9846 29.9871 20.659 29.9986C20.3093 30.0112 20.1846 29.7599 20.1824 29.4514C20.1756 28.5561 20.1796 27.6612 20.1793 26.7659C20.1793 26.618 20.1793 26.4703 20.1793 26.3005V26.2997ZM25.363 15.0067C25.363 12.597 25.3666 10.1876 25.3619 7.77782C25.3582 5.88675 24.2021 4.66647 22.3265 4.65863C17.4392 4.63845 12.5519 4.63817 7.66466 4.65919C5.85064 4.66703 4.64998 5.84808 4.64325 7.62007C4.62476 12.5356 4.62588 17.4515 4.64241 22.367C4.64858 24.1592 5.8823 25.3714 7.67195 25.375C12.5592 25.3851 17.4465 25.3823 22.3337 25.3736C22.9886 25.3725 23.6168 25.2139 24.1612 24.8225C25.045 24.187 25.3554 23.2729 25.3596 22.2356C25.37 19.8259 25.363 17.4165 25.363 15.0067Z" fill="black" />
                <path d="M16.4147 19.3302C16.2894 19.4361 16.1636 19.6267 16.0202 19.641C15.8736 19.6555 15.6394 19.5373 15.5665 19.4078C15.3381 19.0024 15.1526 18.5703 14.9809 18.1363C14.8834 17.8897 14.7391 17.821 14.4847 17.8227C12.9435 17.8337 11.4024 17.8345 9.86133 17.8222C9.59851 17.8202 9.46625 17.909 9.37266 18.1489C9.22304 18.5325 9.03754 18.9018 8.87166 19.2792C8.75006 19.5561 8.58866 19.7788 8.24738 19.6278C7.91226 19.4796 7.95036 19.2195 8.07757 18.9351C8.95712 16.9659 9.83135 14.9941 10.7081 13.0237C11.0488 12.2582 11.3792 11.4874 11.7423 10.7328C11.8197 10.5722 12.0292 10.359 12.1607 10.3705C12.3277 10.3851 12.5479 10.5717 12.6233 10.739C13.8494 13.4561 15.0568 16.1816 16.2667 18.906C16.3163 19.0175 16.3477 19.1369 16.4144 19.3302H16.4147ZM12.1803 11.9119C11.4352 13.6049 10.7258 15.2169 10.0006 16.8644H14.3574C13.6309 15.2115 12.9256 13.6079 12.18 11.9119H12.1803Z" fill="black" />
                <path d="M19.2532 14.9754C19.2532 13.6814 19.2529 12.3877 19.2537 11.0937C19.2537 10.9702 19.217 10.8144 19.2767 10.7298C19.3837 10.5784 19.5412 10.3885 19.6973 10.3686C19.8236 10.3526 20.01 10.5398 20.11 10.6796C20.1784 10.7751 20.1548 10.9438 20.1548 11.08C20.1568 13.6951 20.1562 16.3105 20.1562 18.9256C20.1562 19.0083 20.1602 19.0912 20.1534 19.1733C20.1305 19.4516 20.0038 19.6679 19.7062 19.669C19.3854 19.6701 19.2546 19.4493 19.2543 19.1456C19.2532 17.9757 19.2532 16.8056 19.2526 15.6358C19.2526 15.4156 19.2526 15.1953 19.2526 14.9751L19.2532 14.9754Z" fill="black" />
            </g>
            <defs>
                <clipPath id="clip0_31_71">
                    <rect width="30" height="30.0062" fill="white" />
                </clipPath>
            </defs>
        </svg>
        <h5 class="font-medium text-[16px]">Servicios de AI</h5>
    </div>
    {{-- Servicios de AI end --}}

    {{-- Traducción y escritura --}}
    <div class="flex flex-col gap-[20px] p-[20px] w-[160px] h-[160px] shadow-[0_10px_15px_0px_rgba(17,17,26,0.05)] border-solid border-[0.5px] border-blue border-opacity-10 rounded-[16px] hover:bg-[radial-gradient(ellipse_at_center,_rgba(0,196,142,0.2)_0%,_#F8FBFF_75%)] transition-all duration-500 ease-out">
        <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_31_224)">
                <path d="M15.0046 17.9945C11.0627 17.9945 7.12086 17.9945 3.17901 17.9945C1.30966 17.9945 0.015197 16.6932 0.015197 14.814C0.015197 10.975 0.0493716 7.13529 0.00038798 3.29672C-0.0231545 1.48167 1.22612 -0.00492408 3.29976 1.22581e-05C9.87382 0.015201 16.4475 0.00570803 23.0216 0.00570803C24.2928 0.00570803 25.5641 -0.00796182 26.8351 0.00950521C28.1314 0.027352 29.157 0.549085 29.7027 1.76798C29.8857 2.17656 29.9814 2.65842 29.9837 3.10762C30.0049 7.01075 30.0019 10.9142 29.9936 14.8174C29.9894 16.7296 28.7006 17.9949 26.7914 17.9945C22.8624 17.9941 18.9335 17.9945 15.0046 17.9945ZM15.3486 9.00123C15.3486 11.5955 15.3486 14.1897 15.3486 16.7839C15.3486 17.1376 15.5225 17.3148 15.8703 17.3155C19.4921 17.3155 23.1138 17.3167 26.7356 17.3155C28.3703 17.3148 29.3169 16.3655 29.3177 14.727C29.3188 10.8998 29.3192 7.07264 29.3177 3.24546C29.3169 1.6533 28.3676 0.68958 26.7823 0.687682C23.1222 0.682745 19.4617 0.69034 15.8016 0.679707C15.4481 0.678568 15.3395 0.78337 15.3414 1.14182C15.3554 3.76188 15.349 6.38155 15.349 9.00161L15.3486 9.00123ZM14.6826 8.99857C14.6826 6.39256 14.6753 3.78656 14.6902 1.18056C14.6924 0.787927 14.5649 0.677429 14.1806 0.678568C10.5349 0.690719 6.88885 0.687302 3.24318 0.685024C1.69811 0.684264 0.682741 1.67343 0.688817 3.22534C0.704005 7.08935 0.692234 10.9534 0.694513 14.8177C0.695272 16.3249 1.66621 17.3106 3.16951 17.3136C6.84101 17.3205 10.5125 17.3163 14.184 17.3155C14.6674 17.3155 14.6818 17.3 14.6822 16.8166C14.6829 14.2106 14.6826 11.6046 14.6822 8.99857H14.6826Z" fill="black" />
                <path d="M25.0094 6.75178C24.8267 6.73166 24.6688 6.69938 24.5108 6.699C22.7132 6.69559 20.9157 6.69673 19.1181 6.69673C19.041 6.69673 18.9639 6.69407 18.8868 6.69748C18.6537 6.70774 18.4486 6.62838 18.4482 6.3789C18.4482 6.11879 18.6529 6.01703 18.902 6.01741C19.4283 6.01741 19.955 6.01741 20.4813 6.01741C20.9308 6.01741 21.3804 6.00792 21.8293 6.02007C22.081 6.0269 22.174 5.93083 22.1569 5.6806C22.141 5.45087 22.1137 5.20671 22.1733 4.99179C22.22 4.82434 22.3715 4.59613 22.5139 4.56499C22.7607 4.51069 22.8427 4.74308 22.8526 4.96977C22.8621 5.18735 22.8963 5.40682 22.8792 5.62212C22.8553 5.92514 22.9627 6.0288 23.2699 6.02311C24.1554 6.00678 25.0417 6.01703 25.9275 6.01817C26.043 6.01817 26.1869 5.98437 26.267 6.03981C26.3973 6.12981 26.485 6.28055 26.5909 6.40586C26.4736 6.50269 26.3464 6.69141 26.2401 6.6804C25.8311 6.63825 25.7122 6.85583 25.6196 7.1915C25.203 8.70088 24.4725 10.0386 23.3918 11.1801C23.1013 11.4865 23.1165 11.5556 23.4974 11.7793C24.0609 12.11 24.6266 12.4369 25.1928 12.7631C25.3967 12.8804 25.5824 13.0213 25.4354 13.2784C25.2938 13.5263 25.0557 13.4675 24.8586 13.357C24.1767 12.9746 23.497 12.588 22.8306 12.1799C22.6058 12.0424 22.4588 12.0208 22.2169 12.1772C21.5828 12.5869 20.9194 12.9518 20.258 13.3171C20.1217 13.3923 19.9421 13.4219 19.786 13.4132C19.7154 13.4094 19.5855 13.2442 19.6003 13.18C19.6341 13.0365 19.7093 12.8569 19.8251 12.7863C20.4045 12.4331 20.9969 12.1001 21.5961 11.7819C21.9147 11.6126 21.8923 11.461 21.6542 11.2385C21.1761 10.792 20.711 10.3318 20.2424 9.87534C20.16 9.79522 20.0377 9.71434 20.0203 9.6179C19.9914 9.45993 19.9739 9.22717 20.0628 9.14173C20.1437 9.06427 20.414 9.08211 20.5276 9.16185C20.7657 9.32893 20.9563 9.56398 21.1659 9.77168C21.5304 10.1328 21.8938 10.4954 22.2599 10.855C22.4193 11.0118 22.5682 11.0434 22.7516 10.8615C23.8945 9.72763 24.5883 8.3504 25.0086 6.7514L25.0094 6.75178Z" fill="black" />
                <path d="M7.48537 11.2324C6.86909 11.2324 6.25205 11.2465 5.63614 11.2263C5.34186 11.2169 5.19681 11.33 5.09619 11.5977C4.90671 12.1008 4.67888 12.5892 4.48028 13.0892C4.3827 13.3349 4.24752 13.513 3.96652 13.3915C3.66769 13.262 3.8116 13.0148 3.88678 12.8276C4.38383 11.5901 4.89455 10.3576 5.40072 9.12347C5.97485 7.72383 6.54253 6.32115 7.13071 4.92758C7.19527 4.77494 7.37411 4.67089 7.50018 4.54407C7.61751 4.66292 7.78535 4.76127 7.84458 4.90404C8.73388 7.04641 9.60951 9.19409 10.487 11.341C10.7004 11.8628 10.9279 12.3803 11.1079 12.9134C11.1538 13.0501 11.0938 13.3307 10.9936 13.3869C10.7623 13.5164 10.6032 13.3604 10.5091 13.1162C10.3105 12.6021 10.0815 12.0997 9.88101 11.5859C9.77925 11.3251 9.62888 11.2142 9.3346 11.2252C8.71907 11.2487 8.10203 11.2324 7.48537 11.2324ZM7.54802 5.91789C7.50474 5.92548 7.46107 5.93346 7.41778 5.94105C6.7958 7.44587 6.17383 8.9507 5.52679 10.5163H9.41206C8.77451 8.94386 8.16127 7.43068 7.54802 5.91751V5.91789Z" fill="black" />
            </g>
            <defs>
                <clipPath id="clip0_31_224">
                    <rect width="30" height="17.9945" fill="white" />
                </clipPath>
            </defs>
        </svg>
        <h5 class="font-medium text-[16px]">Traducción y escritura</h5>
    </div>
    {{-- Traducción y escrituraI end --}}

</div>
{{-- Services end --}}

{{-- Popular services --}}
<div class="flex flex-col justify-center items-center bg-bg py-[40px] gap-[40px] m-auto max-sm:w-[90vw]">
    <h2 class="text-blue text-[36px] max-sm:text-[28px] font-light">Servicios <span class="text-green font-secondary">Populares</span></h2>
    <div class="grid grid-cols-6 gap-[20px] max-sm:grid-cols-2">
        {{-- Desarrollo web --}}
        <a href="">
            <div class="flex flex-col justify-center items-start bg-[#00732E] gap-[20px] max-sm:gap-[10px] p-[10px] rounded-[16px] hover:bg-opacity-85 transition-all duration-500 ease-out">
                <h5 class="h-[60px] text-white font-semibold text-[20px] max-sm:text-[16px] p-[5px]">Desarrollo Web</h5>
                <img class="rounded-[16px]" src="{{ asset('images/homepage/dev.jpg') }}" alt="">
            </div>
        </a>
        {{-- Desarrollo web end --}}

        {{-- Diseño de logo--}}
        <a href="">
            <div class="flex flex-col justify-center items-start bg-[#F97B4D] gap-[20px] max-sm:gap-[10px] p-[10px] rounded-[16px] hover:bg-opacity-85 transition-all duration-500 ease-out">
                <h5 class="h-[60px] text-white font-semibold text-[20px] max-sm:text-[16px] p-[5px]">Diseño de logo</h5>
                <img class="rounded-[16px]" src="{{ asset('images/homepage/diseno_logo.jpg') }}" alt="">
            </div>
        </a>
        {{-- Diseño de logo end --}}

        {{-- Marketing --}}
        <a   href="">
            <div class="flex flex-col justify-center items-start bg-[#687200] gap-[20px] max-sm:gap-[10px] p-[10px] rounded-[16px] hover:bg-opacity-85 transition-all duration-500 ease-out">
                <h5 class="h-[60px] text-white font-semibold text-[20px] max-sm:text-[16px] p-[5px]">Marketing</h5>
                <img class="rounded-[16px]" src="{{ asset('images/homepage/marketing.jpg') }}" alt="">
            </div>
        </a>
        {{-- Marketing end --}}

        {{-- arquitectura y diseño --}}
        <a href="">
            <div class="flex flex-col justify-center items-start bg-[#4D1727] gap-[20px] max-sm:gap-[10px] p-[10px] rounded-[16px] hover:bg-opacity-85 transition-all duration-500 ease-out">
                <h5 class="w-[180px] h-[60px]  text-white font-semibold text-[20px] max-sm:text-[16px] p-[5px]">Arquitectura y Diseño Interior</h5>
                <img class="rounded-[16px]" src="{{ asset('images/homepage/arquitectura.jpg') }}" alt="">
            </div>
        </a>
        {{-- arquitectura y diseño end --}}

        {{-- desarrollo de software --}}
        <a href="">
            <div class="flex flex-col justify-center items-start bg-[#254200] gap-[20px] max-sm:gap-[10px] p-[10px] rounded-[16px] hover:bg-opacity-85 transition-all duration-500 ease-out">
                <h5 class="w-[180px] h-[60px]  text-white font-semibold text-[20px] max-sm:text-[16px] p-[5px]">Desarrollo de Software</h5>
                <img class="rounded-[16px]" src="{{ asset('images/homepage/dev.jpg') }}" alt="">
            </div>
        </a>
        {{-- desarrollo de software end --}}

        {{-- video --}}
        <a id="services" href="">
            <div class="flex flex-col justify-center items-start bg-[#C66783] gap-[20px] max-sm:gap-[10px] p-[10px] rounded-[16px] hover:bg-opacity-85 transition-all duration-500 ease-out">
                <h5 class="w-[180px] h-[60px] text-white font-semibold text-[20px] max-sm:text-[16px] p-[5px]">Edición de Video</h5>
                <img class="rounded-[16px]" src="{{ asset('images/homepage/video.jpg') }}" alt="">
            </div>
        </a>
        {{-- video end --}}
    </div>
</div>
{{-- Popular services end --}}

{{-- Servicios --}}
    <div  class="flex flex-col justify-center items-center bg-bg py-[40px] gap-[60px] m-auto max-sm:w-[110vw] p-7">
        <h2 class="text-blue text-[36px] max-sm:text-[28px] font-light">Todos los <span class="text-green font-secondary">Servicios</span></h2>

        <div class="grid grid-cols-4 py-8 gap-[20px] max-sm:grid-cols-1">
            @if ($gigs && count($gigs) > 0)
            @foreach ($gigs as $gig)
            <div class="w-full max-w-[320px] sm:max-w-[400px] lg:max-w-[500px] border border-gray-300 rounded-lg p-4 shadow-md">
                @if (Auth::guard('buyers')->check())
                <a href="{{ route('sellerGig', ['id' => $gig->id, 'username' => $username]) }}" class="block w-full cursor-pointer service-link" data-authenticated="true">
                    @else
                    <a href="#" class="block w-full cursor-pointer service-link" data-authenticated="false">
                        @endif
                        <div class="flex flex-col items-center">
                            <!-- Imagen del gig -->
                            <img class="w-full h-40 object-cover rounded-md" src="{{ asset('images/gigs/' . $gig->gig_image) }}" alt="{{ $gig->gig_name }}">

                            <!-- Nombre del gig -->
                            <span class="text-[16px] pt-6 max-sm:text-[15px] text-center font-light text-black">{{ $gig->gig_name }}</span>

                         <!-- Calificación y cantidad de reseñas -->
                        <div class="flex gap-2 mt-2 pt-1 items-center">
                            <img class="w-5 h-5" src="{{ asset('images/profile/star.png') }}" alt="Calificación">
                            <span class="text-primary font-semibold text-[15px] max-sm:text-[12px]">
                                @if ($gig->reviews->isNotEmpty())
                                    {{ number_format($gig->reviews->avg('rating'), 1) }} / 5
                                @else
                                    Sin calificaciones
                                @endif
                            </span>
                        </div>

                            <!-- Precio del gig -->
                            <div class="text-primary font-semibold text-[16px] max-sm:text-[13px] pt-2 pb-4 mt-2">Desde ₡{{ $gig->gig_price }}</div>
                        </div>
                    </a>
            </div>
            @endforeach
            @else
            <div class="flex flex-col items-center justify-center place-content-center text-center p-10 bg-blue-50 border border-blue-200 rounded-lg shadow-md mt-10">
                <h2 class="text-2xl font-bold text-blue-600">¡Lo sentimos!</h2>
                <p class="text-lg text-blue-500 mt-2">Actualmente no hay servicios disponibles.</p>
                <p class="text-gray-600 mt-2">Vuelve más tarde o explora otros perfiles.</p>
                <a href="{{ url('/sellers/{username}/dashboardgigs') }}" class="mt-5 inline-block bg-blue-600 text-white py-2 px-4 rounded-full shadow-lg hover:bg-blue-700 transition duration-300 ease-in-out">
                    Explorar más servicios
                </a>
            </div>
            @endif
        </div>
    </div>


    <!-- Modal -->
    <div id="authModal" class="hidden fixed inset-0 bg-blue bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-8 max-w-sm w-full shadow-lg text-center">
            <h2 class="text-xl font-semibold mb-4 text-gray-800">Acción no permitida</h2>
            <p class="text-gray-600 mb-6">Para ver más detalles del servicio debes estar registrado.</p>
            <div class="flex justify-center gap-5">
                <button id="closeModal" class="button px-[20px] py-[10px] rounded-[10px] text-blue font-semibold border-solid border-[1px] border-blue hover:translate-y-[-5px] transition-all duration-500 ease-out hover:bg-blue hover:text-white ">
                    Cancelar
                </button>
                <a href="{{ route('login') }}" class="button px-[20px] py-[10px] rounded-[10px] text-blue font-semibold border-solid border-[1px] border-blue hover:translate-y-[-5px] transition-all duration-500 ease-out hover:bg-blue hover:text-white ">
                    Iniciar Sesión
                </a>
            </div>
        </div>
    </div>


    {{-- Servicios end --}}

    {{-- Quienes somos --}}
    <div class="flex w-full bg-blue py-[40px]">
        <div class="flex flex-col justify-center items-center m-auto w-[90vw] gap-[40px]">
            <h2 class="text-white w-fit text-[36px] max-sm:text-[28px] font-light">¿Quiénes <span class="text-green font-secondary">somos?</span></h2>
            <div class="grid grid-cols-3 max-sm:grid-cols-1 max-sm:gap-[40px] w-full">
                <div class="flex flex-col justify-between items-center h-[200px] gap-[20px]">
                    <img class="w-[80px] max-sm:w-[60px]" src="{{ asset('icons/grow.svg') }}" alt="Grow">
                    <div class="flex flex-col items-center gap-[10px]">
                        <h3 class="text-[24px] font-semibold text-white">Crece como freelancer</h3>
                        <p class="text-[16px] text-center font-light text-white">Ticolancer está diseñado para conectar a
                            profesionales independientes en Costa Rica
                            con quienes buscan sus servicios.</p>
                    </div>
                </div>

                <div class="flex flex-col justify-between items-center h-[200px] gap-[20px]">
                    <img class="w-[80px] max-sm:w-[60px]" src="{{ asset('icons/rocket.svg') }}" alt="Rocket">
                    <div class="flex flex-col items-center gap-[10px]">
                        <h3 class="text-[24px] font-semibold text-white">Impulsa tu talento</h3>
                        <p class="text-[16px] text-center font-light text-white">En Ticolancer, brindamos una plataforma dedicada
                            a freelancers costarricenses, donde puedes ofrecer
                            tus servicios a clientes locales y globales.</p>
                    </div>
                </div>

                <div class="flex flex-col justify-between items-center h-[200px] gap-[20px]">
                    <img class="w-[80px] max-sm:w-[60px]" src="{{ asset('icons/network.svg') }}" alt="Network">
                    <div class="flex flex-col items-center gap-[10px]">
                        <h3 class="text-[24px] font-semibold text-white">Conecta con oportunidades</h3>
                        <p class="text-[16px] text-center font-light text-white">Ticolancer es la plataforma ideal para freelancers
                            ticos que buscan ampliar su red de clientes
                            y aumentar su visibilidad.</p>
                    </div>
                </div>
            </div>
            <a class="px-[20px] py-[10px] text-blue bg-white rounded-[10px] font-semibold hover:text-green hover:translate-y-[-5px] transition-all duration-500 ease-out " href="{{ route('nosotros') }}">Leer más</a>
        </div>
    </div>
    {{-- Quienes somos end --}}

    {{-- Seras el proximo --}}
    <div class="w-[90vw] m-auto grid grid-cols-2 max-sm:grid-cols-1 gap-[40px] py-[40px]">
        <div class="flex justify-center items-start max-sm:items-center flex-col gap-[20px] ">
            <h2 class="text-blue text-[36px] max-sm:text-[28px] font-light">¿Serás el <span class="text-green font-secondary">próximo?</span></h2>
            <p class="text-[18px] max-sm:text-center font-light text-black">Tu puedes ser el próximo freelancer tico en nuestra web!</p>
            <a class="px-[20px] py-[10px] rounded-[10px] text-blue font-semibold border-solid border-[1px] border-blue hover:translate-y-[-5px] transition-all duration-500 ease-out hover:bg-blue hover:text-white " href="{{ route('signup') }}">Registrarse</a>
        </div>
        <div class="flex justify-center items-start">
            <img src="https://i.postimg.cc/pX0jkmrF/illustration.png" alt="">
        </div>
    </div>
    {{-- Seras el proximo end --}}

    {{-- Enviar email --}}
    <div class="flex w-full bg-blue py-[40px]">
        <div class="flex flex-col justify-center items-center m-auto w-[90vw] gap-[40px]">
            <img src="https://i.postimg.cc/L5xn179L/illustration2.png" alt="">
            <div class="flex flex-col w-full gap-[20px] max-sm:items-center">
                <h2 class="text-white w-fit text-[36px] max-sm:text-[28px] font-light">¿Deseas <span class="text-green font-secondary">contactarnos?</span></h2>
                <h3 class="text-white font-light text-[22px]">¡Únete a la familia Ticolancer!</h3>
                <form class="flex flex-row" action="{{ route('subscription.store') }}" method="POST">
                    @csrf
                    <input type="text" name="email" placeholder="Email" class="rounded-l-[10px] w-[40%] max-sm:w-[100%] p-[10px] text-[16px] text-white bg-transparent border-[1px] border-white font-light outline-none">
                    <input type="submit" class="rounded-r-[10px] p-[10px] cursor-pointer text-[16px] text-primary font-semibold bg-white outline-none">
                </form>
            </div>
        </div>
    </div>
    {{-- Enviar email end --}}

    @endsection

    <script>
      document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('authModal');
    const closeModal = document.getElementById('closeModal');
    const serviceLinks = document.querySelectorAll('.service-link');
    const modalContent = modal.querySelector('.bg-white'); // Selecciona el contenido del modal

    // Mostrar el modal si el usuario no está autenticado
    serviceLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            if (link.dataset.authenticated === 'false') {
                e.preventDefault();
                modal.classList.remove('hidden');
            }
        });
    });

    // Cerrar el modal al hacer clic en el botón "Cancelar"
    closeModal.addEventListener('click', function () {
        modal.classList.add('hidden');
    });

    // Cerrar el modal al hacer clic fuera del contenido del modal
    modal.addEventListener('click', function (e) {
        if (!modalContent.contains(e.target)) { // Si el clic está fuera del contenido del modal
            modal.classList.add('hidden');
        }
    });
});

    </script>
