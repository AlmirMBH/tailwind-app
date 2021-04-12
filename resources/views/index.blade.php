<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
{{--NOTES--}}
{{--avoid image distortion sm:object-cover--}}
{{--<body class="bg-gray-100 sm:bg-green-500 md:bg-red-200 bg:yellow-500 xl:pink-500">--}}
<body class="bg-gray-300">

    <div class="flex bg-gray-100">
        <div class="px-8 py-12 max-w-md mx-auto sm-w-xl lg:max-w-full lg:w-1/2 lg:py-24 lg:px-12">

            <div class="lg:max-w-lg xl:ml-auto">
                <img class="h-30" src="{{asset('img/workcation.png')}}" alt="workcation">
                <img class="mt-6 rounded-lg shadow-xl sm:mt-8 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden" src="{{asset('img/beach-work.jpg')}}" alt="">
                <h1 class="mt-6 text-2xl font-bold text-gray-900 leading-tight sm:mt-8 sm:text-4xl lg:text-3xl xl:text-4xl">You can work from anywhere.
                    <br class="hidden sm:inline md:inline lg:inline"><span class="text-indigo-500">Take advantage of it.</span>
                </h1>
                <p class="mt-2 sm:mt-4 text-gray-600 sm:text-xl">
                    Workcation helps you find work-friendly rentals in beautiful locations
                    so you can enjoy some nice weather even when you're not on vacation.
                </p>
{{--                tailwind active classes need to be enabled in the tailwind.config.js file--}}
                <div class="mt-4 sm:mt-6">
                    <a href="#" class="btn btn-indigo shadow-lg sm:text-base">Book your escape</a>
                    <a href="#" class="btn btn-gray ml-2 sm:text-base">Learn more</a>
                </div>
            </div>

        </div>

        <div class="hidden lg:block lg:w-1/2 lg:relative">
            <img class="absolute inset-0 h-full w-full object-cover object-center" {{-- inste 0 is short version of: top 0, bottom 0, left 0, right 0--}}
                 src="{{asset('img/beach-work.jpg')}}"
                 alt="">
        </div>

    </div> {{-- end of flex --}}

    <template>
        <div class="max-w-md sm:max-w-xl lg:max-w-6xl mx-auto px-8 lg:px-12 py-8">
            <h2 class="text-xl text-gray-900">Popular destionations</h2>
            <p class="text-gray-600">A selection of great work-friendly cities with lots to see and explore</p>
            <div class="flex flex-wrap -mx-4">
                <div class="mt-6 w-full px-4 lg:w-1/2 xl:w-1/3" v-for="destination in popularDestinations"> <!--add after 1/3 v-for="destination in popularDestinations"-->
                    <DestinationCard :destination="destination"/>
                </div>
            </div>
        </div>
    </template>


</body>
</html>
<script type="module">
    import DestinationCard from './js/components/DestinationCard'

    export default {
        name: 'app',
        components:{
            DestinationCard
        },
        data(){
            return{
                popularDestinations: [
                    {
                        city: 'Toronto',
                        averagePrice: 120,
                        propertyCount: 76,
                        imageUrl: '',
                        imageAlt: 'Toronto skyline'
                    },
                    {
                        city: 'Malibu',
                        averagePrice: 215,
                        propertyCount: 43,
                        imageUrl: '',
                        imageAlt: 'Cliff in Malibu'
                    },
                    {
                        city: 'Chicago',
                        averagePrice: 130,
                        propertyCount: 115,
                        imageUrl: '',
                        imageAlt: 'Chicago skyline'
                    },
                    {
                        city: 'Seattle',
                        averagePrice: 110,
                        propertyCount: 56,
                        imageUrl: '',
                        imageAlt: 'Seattle skyline'
                    }
                ]
            }
        }
    }
</script>
