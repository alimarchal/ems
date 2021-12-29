<x-app-layout>
    @include('vendor.jetstream.components.message')

    <div class="pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-12 gap-6 mt-5">
                <a href="{{route('employee.index')}}" class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                    <div class="p-5">
                        <div class="grid grid-cols-3 gap-1">
                            <div class="col-span-2">
                                <div class="text-3xl font-bold leading-8">{{$employees->count()}}</div>
                                <div class="mt-1 text-base font-bold text-gray-600">Employees</div>
                            </div>
                            <div class="col-span-1 flex items-center justify-end">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('designation.index')}}" class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                    <div class="p-5">
                        <div class="grid grid-cols-3 gap-1">
                            <div class="col-span-2">
                                <div class="text-3xl font-bold leading-8">{{$vacant_post}}</div>

                                <div class="mt-1 text-base  font-bold text-gray-600">Vacant Post</div>
                            </div>
                            <div class="col-span-1 flex items-center justify-end">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM21 12h-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{route('legalcase.index')}}" class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                    <div class="p-5">
                        <div class="grid grid-cols-3 gap-1">
                            <div class="col-span-2">
                                <div class="text-3xl font-bold leading-8">{{$legal_case}}</div>
                                <div class="mt-1 text-base  font-bold text-gray-600">Legal cases</div>
                            </div>
                            <div class="col-span-1 flex items-center justify-end">
                                <img src="https://cdn-icons-png.flaticon.com/512/186/186359.png" alt="legal case" class="h-12 w-12">
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                    <div class="p-5">
                        <div class="grid grid-cols-3 gap-1">
                            <div class="col-span-2">
                                <div class="text-3xl font-bold leading-8">{{$OnLeave}}</div>
                                <div class="mt-1 text-base  font-bold text-gray-600">Employees on leave</div>
                            </div>
                            <div class="col-span-1 flex items-center justify-end">
                                <img src="https://cdn-icons-png.flaticon.com/512/914/914612.png" alt="employees on leave" class="h-12 w-12">
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="grid grid-cols-6 gap-6 mt-6">
                <div class="col-span-6 md:col-span-6 lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-lg p-4" id="service_length_chart"></div>
                    <div class="bg-white rounded-lg shadow-lg p-4 mt-4" id="retirment_in_chart"></div>
                </div>
                <div class="col-span-6 md:col-span-3 lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-lg p-4"  id="gender_chart"></div>
                </div>
                <div class="col-span-6 md:col-span-3 lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-lg p-4" id="age_chart"></div>
                </div>
            </div>
            <div class="grid grid-cols-6 gap-6 mt-6">
                <div class="col-span-6 md:col-span-3">
                    <div class="bg-white rounded-lg shadow-lg p-4"  id="salary_chart"></div>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <div class="bg-white rounded-lg shadow-lg p-4" id="scale_chart"></div>
                </div>
            </div>
        </div>
    </div>


    <script>
        var gender_options = {
            series: [@foreach($gender as $g){{$g->total}},@endforeach],
            dataLabels: {
                formatter: function (val, opts) {
                    return opts.w.config.series[opts.seriesIndex]
                },
            },
            chart: {
                width: '100%',
                height: '400px',
                type: 'pie',
                toolbar: {
                    show: true,
                    offsetX: 0,
                    offsetY: 0,
                    tools: {
                        download: true,
                        selection: true,
                        zoom: true,
                        zoomin: true,
                        zoomout: true,
                        pan: true,
                        reset: true | '<img src="/static/icons/reset.png" width="20">',
                        customIcons: []
                    },
                    export: {
                        csv: {
                            filename: undefined,
                            columnDelimiter: ',',
                            headerCategory: 'category',
                            headerValue: 'value',
                            dateFormatter(timestamp) {
                                return new Date(timestamp).toDateString()
                            }
                        },
                        svg: {
                            filename: undefined,
                        },
                        png: {
                            filename: undefined,
                        }
                    },
                    autoSelected: 'zoom'
                },
            },
            labels: [@foreach($gender as $g)'{{$g->gender}}',@endforeach],
            legend: {
                position: 'bottom',
            },
            title: {
                text: 'Gender Segregation',
                align: 'left',
                margin: 0,
                offsetX: 0,
                offsetY: 0,
                floating: false,
                style: {
                    fontSize:  '16px',
                    fontWeight:  'bold',
                    fontFamily:  undefined,
                    color:  '#263238'
                },
            },
            responsive: [{
                breakpoint: 678,
                options: {
                    chart: {
                        width: '100%',
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var gender_chart = new ApexCharts(document.querySelector("#gender_chart"), gender_options);
        gender_chart.render();

        var age_options = {
            series: [@foreach($age_range as $g){{$g->count}},@endforeach],
            dataLabels: {
                formatter: function (val, opts) {
                    return opts.w.config.series[opts.seriesIndex]
                },
            },
            chart: {
                width: '100%',
                type: 'donut',
                height: '400px',
                toolbar: {
                    show: true,
                    offsetX: 0,
                    offsetY: 0,
                    tools: {
                        download: true,
                        selection: true,
                        zoom: true,
                        zoomin: true,
                        zoomout: true,
                        pan: true,
                        reset: true | '<img src="/static/icons/reset.png" width="20">',
                        customIcons: []
                    },
                    export: {
                        csv: {
                            filename: undefined,
                            columnDelimiter: ',',
                            headerCategory: 'category',
                            headerValue: 'value',
                            dateFormatter(timestamp) {
                                return new Date(timestamp).toDateString()
                            }
                        },
                        svg: {
                            filename: undefined,
                        },
                        png: {
                            filename: undefined,
                        }
                    },
                    autoSelected: 'zoom'
                },
            },
            theme: {
                monochrome: {
                    enabled: true,
                    color: '#255aee',
                    shadeTo: 'light',
                    shadeIntensity: 0.65
                }
            },

            labels: [@foreach($age_range as $g)'{{$g->range}}',@endforeach],
            legend: {
                position: 'bottom',
            },
            title: {
                text: 'Age Classification',
                align: 'left',
                margin: 0,
                offsetX: 0,
                offsetY: 0,
                floating: false,
                style: {
                    fontSize:  '16px',
                    fontWeight:  'bold',
                    fontFamily:  undefined,
                    color:  '#263238'
                },
            },
            responsive: [{
                breakpoint: 678,
                options: {
                    chart: {
                        width: '100%',
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var age_chart = new ApexCharts(document.querySelector("#age_chart"), age_options);
        age_chart.render();

        var service_length_options = {
            series: [@foreach($service_lengths as $key=>$value){{$value}},@endforeach],
            dataLabels: {
                formatter: function (val, opts) {
                    return opts.w.config.series[opts.seriesIndex]
                },
            },
            chart: {
                width: '100%',
                type: 'donut',
                height:'180px',
                toolbar: {
                    show: true,
                    offsetX: 0,
                    offsetY: 0,
                    tools: {
                        download: true,
                        selection: true,
                        zoom: true,
                        zoomin: true,
                        zoomout: true,
                        pan: true,
                        reset: true | '<img src="/static/icons/reset.png" width="20">',
                        customIcons: []
                    },
                    export: {
                        csv: {
                            filename: undefined,
                            columnDelimiter: ',',
                            headerCategory: 'category',
                            headerValue: 'value',
                            dateFormatter(timestamp) {
                                return new Date(timestamp).toDateString()
                            }
                        },
                        svg: {
                            filename: undefined,
                        },
                        png: {
                            filename: undefined,
                        }
                    },
                    autoSelected: 'zoom'
                },
            },
            plotOptions: {
                pie: {
                    startAngle: -90,
                    endAngle: 90,
                    offsetY: 10
                }
            },
            theme: {
                monochrome: {
                    enabled: true,
                    color: '#059f0f',
                    shadeTo: 'dark',
                    shadeIntensity: 0.65
                }
            },
            markers: {
                colors: ['#F44336', '#E91E63', '#9C27B0']
            },
            labels: [@foreach($service_lengths as $key=>$value)'{{$key}}',@endforeach],
            legend: {
                position: 'right',

            },
            title: {
                text: 'Service Length Division',
                align: 'left',
                margin: 0,
                offsetX: 0,
                offsetY: 0,
                floating: false,
                style: {
                    fontSize:  '16px',
                    fontWeight:  'bold',
                    fontFamily:  undefined,
                    color:  '#263238'
                },
            },
            grid: {
                padding: {
                    bottom: -70
                }
            },
            responsive: [{
                breakpoint: 678,
                options: {
                    chart: {
                        width: '100%',
                        height:'180px'
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var service_length_chart = new ApexCharts(document.querySelector("#service_length_chart"), service_length_options);
        service_length_chart.render();

        var retirment_in_options = {
            series: [@foreach($retirment_in as $key=>$value){{$value}},@endforeach],
            dataLabels: {
                formatter: function (val, opts) {
                    return opts.w.config.series[opts.seriesIndex]
                },
            },
            chart: {
                width: '100%',
                type: 'donut',
                height:'180px',
                toolbar: {
                    show: true,
                    offsetX: 0,
                    offsetY: 0,
                    tools: {
                        download: true,
                        selection: true,
                        zoom: true,
                        zoomin: true,
                        zoomout: true,
                        pan: true,
                        reset: true | '<img src="/static/icons/reset.png" width="20">',
                        customIcons: []
                    },
                    export: {
                        csv: {
                            filename: undefined,
                            columnDelimiter: ',',
                            headerCategory: 'category',
                            headerValue: 'value',
                            dateFormatter(timestamp) {
                                return new Date(timestamp).toDateString()
                            }
                        },
                        svg: {
                            filename: undefined,
                        },
                        png: {
                            filename: undefined,
                        }
                    },
                    autoSelected: 'zoom'
                },
            },
            plotOptions: {
                pie: {
                    startAngle: -90,
                    endAngle: 90,
                    offsetY: 10
                }
            },
            theme: {
                monochrome: {
                    enabled: true,
                    color: '#ee2525',
                    shadeTo: 'light',
                    shadeIntensity: 0.65
                }
            },
            markers: {
                colors: ['#F44336', '#E91E63', '#9C27B0']
            },
            labels: [@foreach($retirment_in as $key=>$value)'{{$key}}',@endforeach],
            legend: {
                position: 'right',

            },
            title: {
                text: 'Upcoming Retirements',
                align: 'left',
                margin: 0,
                offsetX: 0,
                offsetY: 0,
                floating: false,
                style: {
                    fontSize:  '16px',
                    fontWeight:  'bold',
                    fontFamily:  undefined,
                    color:  '#263238'
                },
            },
            grid: {
                padding: {
                    bottom: -100
                }
            },
            responsive: [{
                breakpoint: 678,
                options: {
                    chart: {
                        width: '100%',
                        height:'180px'
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var retirment_in_chart = new ApexCharts(document.querySelector("#retirment_in_chart"), retirment_in_options);
        retirment_in_chart.render();


        var scale_options = {
            series: [@foreach($scale_division as  $key=>$value){{$value}},@endforeach],
            dataLabels: {
                formatter: function (val, opts) {
                    return opts.w.config.series[opts.seriesIndex]
                },
            },
            chart: {
                width: '100%',
                height: '400px',
                type: 'pie',
                toolbar: {
                    show: true,
                    offsetX: 0,
                    offsetY: 0,
                    tools: {
                        download: true,
                        selection: true,
                        zoom: true,
                        zoomin: true,
                        zoomout: true,
                        pan: true,
                        reset: true | '<img src="/static/icons/reset.png" width="20">',
                        customIcons: []
                    },
                    export: {
                        csv: {
                            filename: undefined,
                            columnDelimiter: ',',
                            headerCategory: 'category',
                            headerValue: 'value',
                            dateFormatter(timestamp) {
                                return new Date(timestamp).toDateString()
                            }
                        },
                        svg: {
                            filename: undefined,
                        },
                        png: {
                            filename: undefined,
                        }
                    },
                    autoSelected: 'zoom'
                },
            },
            theme: {
                palette: 'palette3' // upto palette10
            },
            labels: [@foreach($scale_division as $key=>$value)'{{$key}}',@endforeach],
            legend: {
                position: 'bottom',
            },
            title: {
                text: 'Scale Classification',
                align: 'left',
                margin: 0,
                offsetX: 0,
                offsetY: 0,
                floating: false,
                style: {
                    fontSize:  '16px',
                    fontWeight:  'bold',
                    fontFamily:  undefined,
                    color:  '#263238'
                },
            },
            responsive: [{
                breakpoint: 678,
                options: {
                    chart: {
                        width: '100%',
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var scale_chart = new ApexCharts(document.querySelector("#scale_chart"), scale_options);
        scale_chart.render();

        var salary_options = {
            series: [@foreach($salary_division as  $key=>$value){{$value}},@endforeach],
            dataLabels: {
                formatter: function (val, opts) {
                    return opts.w.config.series[opts.seriesIndex]
                },
            },
            chart: {
                width: '100%',
                type: 'donut',
                height: '400px',
                toolbar: {
                    show: true,
                    offsetX: 0,
                    offsetY: 0,
                    tools: {
                        download: true,
                        selection: true,
                        zoom: true,
                        zoomin: true,
                        zoomout: true,
                        pan: true,
                        reset: true | '<img src="/static/icons/reset.png" width="20">',
                        customIcons: []
                    },
                    export: {
                        csv: {
                            filename: undefined,
                            columnDelimiter: ',',
                            headerCategory: 'category',
                            headerValue: 'value',
                            dateFormatter(timestamp) {
                                return new Date(timestamp).toDateString()
                            }
                        },
                        svg: {
                            filename: undefined,
                        },
                        png: {
                            filename: undefined,
                        }
                    },
                    autoSelected: 'zoom'
                },
            },
            theme: {
                monochrome: {
                    enabled: true,
                    color: '#ee9025',
                    shadeTo: 'dark',
                    shadeIntensity: 0.65
                }
            },
            markers: {
                colors: ['#F44336', '#E91E63', '#9C27B0']
            },
            labels: [@foreach($salary_division as  $key=>$value)'{{$key}}',@endforeach],
            legend: {
                position: 'bottom',
            },
            title: {
                text: 'Salary Division',
                align: 'left',
                margin: 0,
                offsetX: 0,
                offsetY: 0,
                floating: false,
                style: {
                    fontSize:  '16px',
                    fontWeight:  'bold',
                    fontFamily:  undefined,
                    color:  '#263238'
                },
            },
            responsive: [{
                breakpoint: 678,
                options: {
                    chart: {
                        width: '100%',
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var salary_chart = new ApexCharts(document.querySelector("#salary_chart"), salary_options);
        salary_chart.render();
    </script>

</x-app-layout>
