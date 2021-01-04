<title>Admin Dashboard</title>
@extends('layout')
@section('content')
    <div class="flex flex-col bg-white">
        <div class="bg-gray-800 pt-3">
            <div class="rounded-t-3xl bg-blue-400 p-4 shadow text-2xl text-white">
                <h3 class="font-bold pl-2">Analytics</h3>
            </div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Metric Card-->
                <div
                    class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">Total Revenue</h5>
                            <h3 class="font-bold text-3xl">$3249 <span class="text-green-500"><i
                                        class="fas fa-caret-up"></i></span></h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Metric Card-->
                <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">Total Users</h5>
                            <h3 class="font-bold text-3xl">249 <span class="text-pink-500"><i
                                        class="fas fa-exchange-alt"></i></span></h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Metric Card-->
                <a href="/user/new">

                    <div
                        class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-yellow-600"><i
                                        class="fas fa-user-plus fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">Add User</h5>

                            </div>

                        </div>
                    </div>
                </a>

                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Metric Card-->
                <a href="/users">
                    <div
                        class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-server fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">View Users</h5>
                                <h3 class="font-bold text-3xl"></h3>
                            </div>
                        </div>
                    </div>
                </a>

                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <a href="/appointment">
                    <!--Metric Card-->
                    <div
                        class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">Appoinments List</h5>
                                <h3 class="font-bold text-3xl">7 tasks</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </a>

            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <a href="/appointment-list">
                    <!--Metric Card-->
                    <div
                        class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-red-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">Appoinments</h5>
                                <h3 class="font-bold text-3xl">3 <span class="text-red-500"><i
                                            class="fas fa-caret-up"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </a>

            </div>
        </div>


        <div class="flex flex-row flex-wrap flex-grow mt-2">

            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Graph Card-->
                <div class="bg-white border-transparent rounded-lg shadow-xl">
                    <div
                        class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">Graph</h5>
                    </div>
                    <div class="p-5">
                        <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                        <script>
                            new Chart(document.getElementById("chartjs-7"), {
                                "type": "bar",
                                "data": {
                                    "labels": ["January", "February", "March", "April"],
                                    "datasets": [{
                                        "label": "Page Impressions",
                                        "data": [10, 20, 30, 40],
                                        "borderColor": "rgb(255, 99, 132)",
                                        "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                    }, {
                                        "label": "Adsense Clicks",
                                        "data": [5, 15, 10, 30],
                                        "type": "line",
                                        "fill": false,
                                        "borderColor": "rgb(54, 162, 235)"
                                    }]
                                },
                                "options": {
                                    "scales": {
                                        "yAxes": [{
                                            "ticks": {
                                                "beginAtZero": true
                                            }
                                        }]
                                    }
                                }
                            });

                        </script>
                    </div>
                </div>
                <!--/Graph Card-->
            </div>

            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Graph Card-->
                <div class="bg-white border-transparent rounded-lg shadow-xl">
                    <div
                        class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">Graph</h5>
                    </div>
                    <div class="p-5">
                        <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                        <script>
                            new Chart(document.getElementById("chartjs-0"), {
                                "type": "line",
                                "data": {
                                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                    "datasets": [{
                                        "label": "Views",
                                        "data": [65, 59, 80, 81, 56, 55, 40],
                                        "fill": false,
                                        "borderColor": "rgb(75, 192, 192)",
                                        "lineTension": 0.1
                                    }]
                                },
                                "options": {}
                            });

                        </script>
                    </div>
                </div>
                <!--/Graph Card-->
            </div>

            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Graph Card-->
                <div class="bg-white border-transparent rounded-lg shadow-xl">
                    <div
                        class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">Graph</h5>
                    </div>
                    <div class="p-5">
                        <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                        <script>
                            new Chart(document.getElementById("chartjs-1"), {
                                "type": "bar",
                                "data": {
                                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                    "datasets": [{
                                        "label": "Likes",
                                        "data": [65, 59, 80, 81, 56, 55, 40],
                                        "fill": false,
                                        "backgroundColor": ["rgba(255, 99, 132, 0.2)",
                                            "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)",
                                            "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)",
                                            "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
                                        ],
                                        "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)",
                                            "rgb(255, 205, 86)", "rgb(75, 192, 192)",
                                            "rgb(54, 162, 235)", "rgb(153, 102, 255)",
                                            "rgb(201, 203, 207)"
                                        ],
                                        "borderWidth": 1
                                    }]
                                },
                                "options": {
                                    "scales": {
                                        "yAxes": [{
                                            "ticks": {
                                                "beginAtZero": true
                                            }
                                        }]
                                    }
                                }
                            });

                        </script>
                    </div>
                </div>
                <!--/Graph Card-->
            </div>

            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Graph Card-->
                <div class="bg-white border-transparent rounded-lg shadow-xl">
                    <div
                        class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">Graph</h5>
                    </div>
                    <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                        <script>
                            new Chart(document.getElementById("chartjs-4"), {
                                "type": "doughnut",
                                "data": {
                                    "labels": ["Admin", "User", "Doctor"],
                                    "datasets": [{
                                        "label": "Issues",
                                        "data": [500, 50, 100],
                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)",
                                            "rgb(255, 205, 86)"
                                        ]
                                    }]
                                }
                            });

                        </script>
                    </div>
                </div>
                <!--/Graph Card-->
            </div>

            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Table Card-->
                <div class="bg-white border-transparent rounded-lg shadow-xl">
                    <div
                        class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">Graph</h5>
                    </div>
                    <div class="p-5">
                        <table class="w-full p-5 text-gray-700">
                            <thead>
                                <tr>
                                    <th class="text-left text-blue-900">Name</th>
                                    <th class="text-left text-blue-900">Side</th>
                                    <th class="text-left text-blue-900">Role</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Obi Wan Kenobi</td>
                                    <td>Light</td>
                                    <td>Jedi</td>
                                </tr>
                                <tr>
                                    <td>Greedo</td>
                                    <td>South</td>
                                    <td>Scumbag</td>
                                </tr>
                                <tr>
                                    <td>Darth Vader</td>
                                    <td>Dark</td>
                                    <td>Sith</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="py-2"><a href="#">See More issues...</a></p>

                    </div>
                </div>
                <!--/table Card-->
            </div>

            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                <!--Advert Card-->
                <div class="bg-white border-transparent rounded-lg shadow-xl">
                    <div
                        class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="font-bold uppercase text-gray-600 text-xl text-bold">Advert</h5>
                    </div>
                    <div class="p-5 text-center">


                        <script async type="text/javascript"
                            src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom"
                            id="_carbonads_js"></script>


                    </div>
                </div>
                <!--/Advert Card-->
            </div>


        </div>
    </div>
@endsection
