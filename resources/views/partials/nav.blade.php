<div class="bg-black py-10 shadow-2xl sm:block hidden">
    <div class="max-w-6xl mx-auto px-6 md:px-8 bg-black">
        <nav class="flex lg:space-x-52 md:space-x-20 space-x-5 leading-5 overflow-x-auto scrollbar-hide ">
            <a href="{{ route('about', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold hover:underline ">ABOUT</a>
            <a href="{{ route('index', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold hover:underline ">INDEXING RESULT</a>
            <a href="{{ route('methodology', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold hover:underline ">METHODOLOGY</a>
            <a  href="{{ route('corporateprofile', app()->getlocale() )}}" class="text-gray-300 uppercase whitespace-nowrap font-semibold hover:underline ">CORPORATE PROFILE</a>
        </nav>
    </div>
</div>
