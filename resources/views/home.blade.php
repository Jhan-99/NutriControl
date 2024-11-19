@extends('layout')

@section('titulo')NutriControl | Sistema para el control de inventarios de alimentos @endsection
@section('content')
            <main class="flex-grow p-6">

                <!-- Page Title Start -->
                <div class="flex justify-between items-center mb-6">
                    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Inicio</h4>

                    <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
                        <div class="flex items-center gap-2">
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">NutriControl</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Menu</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">Dashboard</a>
                        </div>
                    </div>
                </div>
                <!-- Page Title End -->

                <div class="grid 2xl:grid-cols-4 gap-6 mb-6">

                    <div class="2xl:col-span-3">
                        <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
                            <div class="card">
                                <div class="p-6">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="text-base mb-1 text-gray-600 dark:text-gray-400">Nuevos Productos</h4>
                                            <p class="font-normal text-sm text-gray-400 truncate dark:text-gray-500">98</p>
                                        </div>

                                        <div>
                                            <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                                <i class="mgc_more_1_fill text-xl"></i>
                                            </button>

                                            <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                    <i class="mgc_add_circle_line"></i> Agregar
                                                </a>
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                    <i class="mgc_edit_line"></i> Listar
                                                </a>
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                    <i class="mgc_copy_2_line"></i> Exportar
                                                </a>
                                                <div class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-end">
                                        <div class="flex-grow">
                                            <p class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"><i class="mgc_alarm_2_line"></i> Hace 4 hrs</p>
                                        </div>
                                        <div class="flex">
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700" alt="friend">
                                            </a>
                                            <a href="javascript:void(0);" class="-ms-2">
                                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700" alt="friend">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="p-6">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="text-base mb-1 text-gray-600 dark:text-gray-400">Total de Productos</h4>
                                            <p class="font-normal text-sm text-gray-400 truncate dark:text-gray-500">827</p>
                                        </div>
                                        <div>
                                            <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                                <i class="mgc_more_1_fill text-xl"></i>
                                            </button>

                                            <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                    <i class="mgc_add_circle_line"></i> Agregar
                                                </a>
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                    <i class="mgc_edit_line"></i> Listar
                                                </a>
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                    <i class="mgc_copy_2_line"></i> Exportar
                                                </a>
                                                <div class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-end">
                                        <div class="flex-grow">
                                            <p class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"><i class="mgc_alarm_2_line"></i> Hace 3 hrs</p>
                                        </div>
                                        <div class="flex">
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700" alt="friend">
                                            </a>
                                            <a href="javascript:void(0);" class="-ms-2">
                                                <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700" alt="friend">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="p-6">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="text-base mb-1 text-gray-600 dark:text-gray-400">Productos con Bajo Stock</h4>
                                            <p class="font-normal text-sm text-gray-400 truncate dark:text-gray-500">17</p>
                                        </div>
                                        <div>
                                            <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                                <i class="mgc_more_1_fill text-xl"></i>
                                            </button>
                                            <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                    <i class="mgc_add_circle_line"></i> Agregar
                                                </a>
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                    <i class="mgc_edit_line"></i> Listar
                                                </a>
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                    <i class="mgc_copy_2_line"></i> Exportar
                                                </a>
                                                <div class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-end">
                                        <div class="flex-grow">
                                            <p class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"><i class="mgc_alarm_2_line"></i> Hace 5 hrs</p>
                                        </div>
                                        <div class="flex">
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('assets/images/users/avatar-5.jpg') }}" class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700" alt="friend">
                                            </a>
                                            <a href="javascript:void(0);" class="-ms-2">
                                                <img src="{{ asset('assets/images/users/avatar-6.jpg') }}" class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700" alt="friend">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="p-6">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h4 class="text-base mb-1 text-gray-600 dark:text-gray-400">Productos Agotados</h4>
                                            <p class="font-normal text-sm text-gray-400 truncate dark:text-gray-500">5</p>
                                        </div>
                                        <div>
                                            <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                                <i class="mgc_more_1_fill text-xl"></i>
                                            </button>

                                            <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                    <i class="mgc_add_circle_line"></i> Agregar
                                                </a>
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                    <i class="mgc_edit_line"></i> Listar
                                                </a>
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                    <i class="mgc_copy_2_line"></i> Exportar
                                                </a>
                                                <div class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-end">
                                        <div class="flex-grow">
                                            <p class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"><i class="mgc_alarm_2_line"></i> Hace 1 día</p>
                                        </div>
                                        <div class="flex">
                                            <a href="javascript:void(0);">
                                                <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700" alt="friend">
                                            </a>
                                            <a href="javascript:void(0);" class="-ms-2">
                                                <img src="{{ asset('assets/images/users/avatar-8.jpg') }}" class="rounded-full h-8 w-8 border-2 border-gray-300 dark:border-gray-700" alt="friend">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-3 gap-6">
                            <div class="col-span-1">
                                <div class="card">
                                    <div class="p-6">
                                        <h4 class="card-title">Ventas Mensuales</h4>

                                        <div id="monthly-target" class="apex-charts my-8" data-colors="#0acf97,#3073F1"></div>

                                        <div class="flex justify-center">
                                            <div class="w-1/2 text-center">
                                                <h5>Pendientes</h5>
                                                <p class="fw-semibold text-muted">
                                                    <i class="mgc_round_fill text-primary"></i> Revisar
                                                </p>
                                            </div>
                                            <div class="w-1/2 text-center">
                                                <h5>Realizadas</h5>
                                                <p class="fw-semibold text-muted">
                                                    <i class="mgc_round_fill text-success"></i> Revisar
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-2">
                                <div class="card">
                                    <div class="p-6">
                                        <div class="flex justify-between items-center">
                                            <h4 class="card-title">Comparativa de Stock vs Ventas</h4>
                                            <div class="flex gap-2">
                                                <button type="button" class="btn btn-sm bg-primary/25 text-primary hover:bg-primary hover:text-white">
                                                    Todo
                                                </button>
                                                <button type="button" class="btn btn-sm bg-gray-400/25 text-gray-400 hover:bg-gray-400 hover:text-white">
                                                    6M
                                                </button>
                                                <button type="button" class="btn btn-sm bg-gray-400/25 text-gray-400 hover:bg-gray-400 hover:text-white">
                                                    1A
                                                </button>
                                            </div>
                                        </div>

                                        <div dir="ltr" class="mt-2">
                                            <div id="crm-project-statistics" class="apex-charts" data-colors="#cbdcfc,#3073F1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="card mb-6">
                            <div class="px-6 py-5 flex justify-between items-center">
                                <h4 class="header-title">Actividades</h4>
                                <div>
                                    <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                        <i class="mgc_more_1_fill text-xl"></i>
                                    </button>

                                    <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                        <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                            <i class="mgc_add_circle_line"></i> Add
                                        </a>
                                        <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                            <i class="mgc_edit_line"></i> Edit
                                        </a>
                                        <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                            <i class="mgc_copy_2_line"></i> Copy
                                        </a>
                                        <div class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"></div>
                                        <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-danger hover:bg-danger/5" href="javascript:void(0)">
                                            <i class="mgc_delete_line"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-warning/20 text-warning" role="alert">
                                <i class="mgc_folder_star_line me-1 text-lg align-baseline"></i> <b>38</b> Historial
                            </div>

                            <div class="p-6 space-y-3">
                                <div class="flex items-center border border-gray-200 dark:border-gray-700 rounded px-3 py-2">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="w-12 h-12 flex justify-center items-center rounded-full text-primary bg-primary/25">
                                            <i class="mgc_group_line text-xl"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow">
                                        <h5 class="font-semibold mb-1">Proveedores sin revisar</h5>
                                        <p class="text-gray-400">6 Proveedores</p>
                                    </div>
                                    <div>
                                        <button class="text-gray-400" data-fc-type="tooltip" data-fc-placement="top">
                                            <i class="mgc_information_line text-xl"></i>
                                        </button>
                                        <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            Info <div class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center border border-gray-200 dark:border-gray-700 rounded px-3 py-2">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="w-12 h-12 flex justify-center items-center rounded-full text-warning bg-warning/25">
                                            <i class="mgc_compass_line text-xl"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow">
                                        <h5 class="fw-semibold my-0">En progreso</h5>
                                        <p>16x</p>
                                    </div>
                                    <div>
                                        <button class="text-gray-400" data-fc-type="tooltip" data-fc-placement="top">
                                            <i class="mgc_information_line text-xl"></i>
                                        </button>
                                        <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            Info <div class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center border border-gray-200 dark:border-gray-700 rounded px-3 py-2">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="w-12 h-12 flex justify-center items-center rounded-full text-danger bg-danger/25">
                                            <i class="mgc_check_circle_line text-xl"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow">
                                        <h5 class="fw-semibold my-0">Completados</h5>
                                        <p>24x</p>
                                    </div>
                                    <div>
                                        <button class="text-gray-400" data-fc-type="tooltip" data-fc-placement="top">
                                            <i class="mgc_information_line text-xl"></i>
                                        </button>
                                        <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            Info <div class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center border border-gray-200 dark:border-gray-700 rounded px-3 py-2">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="w-12 h-12 flex justify-center items-center rounded-full text-success bg-success/25">
                                            <i class="mgc_send_line text-xl"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow">
                                        <h5 class="fw-semibold my-0">Entregados</h5>
                                        <p>20x</p>
                                    </div>
                                    <div>
                                        <button class="text-gray-400" data-fc-type="tooltip" data-fc-placement="top">
                                            <i class="mgc_information_line text-xl"></i>
                                        </button>
                                        <div class="bg-slate-700 hidden px-2 py-1 rounded transition-all text-white opacity-0 z-50" role="tooltip">
                                            Info <div class="bg-slate-700 w-2.5 h-2.5 rotate-45 -z-10 rounded-[1px]" data-fc-arrow></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card p-6">
                            <h4 class="text-gray-600 dark:text-gray-300 mb-2.5">Tasa de finalización a tiempo <span class="px-2 py-0.5 rounded bg-success/25 text-success ms-2"><i class="mgc_arrow_up_line text-sm align-baseline me-1"></i>59%</span></h4>
                            <div class="flex justify-between items-center mb-2">
                                <h5 class="text-base font-semibold">Ventas concretadas</h5>
                                <h5 class="text-gray-600 dark:text-gray-300">65%</h5>
                            </div>
                            <div class="flex w-full h-1 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700 ">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary w-1/4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Grid End -->

                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
                    <div class="col-span-1">
                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="w-12 h-12 flex justify-center items-center rounded text-primary bg-primary/25">
                                            <i class="mgc_document_2_line text-xl"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow">
                                        <h5 class="mb-1">Productos inactivos</h5>
                                        <p>85</p>
                                    </div>
                                    <div>
                                        <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                            <i class="mgc_more_2_fill text-xl"></i>
                                        </button>

                                        <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                            <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Listar
                                            </a>
                                            <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Reiniciar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="w-12 h-12 flex justify-center items-center rounded text-success bg-success/25">
                                            <i class="mgc_group_line text-xl"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow">
                                        <h5 class="mb-1">Proveedores</h5>
                                        <p>32</p>
                                    </div>
                                    <div>
                                        <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                            <i class="mgc_more_2_fill text-xl"></i>
                                        </button>

                                        <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                            <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Listar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="w-12 h-12 flex justify-center items-center rounded text-info bg-info/25">
                                            <i class="mgc_star_line text-xl"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow">
                                        <h5 class="mb-1">Reseñas</h5>
                                        <p>40</p>
                                    </div>
                                    <div>
                                        <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                            <i class="mgc_more_2_fill text-xl"></i>
                                        </button>

                                        <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                            <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Listar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="card">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="w-12 h-12 flex justify-center items-center rounded text-warning bg-warning/25">
                                            <i class="mgc_new_folder_line text-xl"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow">
                                        <h5 class="mb-1">Productos nuevos</h5>
                                        <p>25</p>
                                    </div>
                                    <div>
                                        <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                            <i class="mgc_more_2_fill text-xl"></i>
                                        </button>

                                        <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                            <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Listar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Grid End -->

                <div class="grid 2xl:grid-cols-4 md:grid-cols-2 gap-6">
                    <div class="2xl:col-span-2 md:col-span-2">
                        <div class="card">
                            <div class="p-6">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title">Vista por categoría</h4>
                                    <div>
                                        <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                            <i class="mgc_more_2_fill text-xl"></i>
                                        </button>

                                        <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                            <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Today
                                            </a>
                                            <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                Yesterday
                                            </a>
                                            <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Last Week
                                            </a>
                                            <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                                                Last Month
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 items-center gap-4">
                                    <div class="md:order-1 order-2">
                                        <div class="flex flex-col gap-6">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="mgc_round_fill h-10 w-10 flex justify-center items-center rounded-full bg-primary/25 text-lg text-primary"></i>
                                                </div>
                                                <div class="flex-grow ms-3">
                                                    <h5 class="fw-semibold mb-1">Perros</h5>
                                                    <ul class="flex items-center gap-2">
                                                        <li class="list-inline-item"><b>26</b> Total</li>
                                                        <li class="list-inline-item">
                                                            <div class="w-1 h-1 rounded bg-gray-400"></div>
                                                        </li>
                                                        <li class="list-inline-item"><b>4</b> Clientes</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="mgc_round_fill h-10 w-10 flex justify-center items-center rounded-full bg-danger/25 text-lg text-danger"></i>
                                                </div>
                                                <div class="flex-grow ms-3">
                                                    <h5 class="fw-semibold mb-1">Gatos</h5>
                                                    <ul class="flex items-center gap-2">
                                                        <li class="list-inline-item"><b>30</b> Total</li>
                                                        <li class="list-inline-item">
                                                            <div class="w-1 h-1 rounded bg-gray-400"></div>
                                                        </li>
                                                        <li class="list-inline-item"><b>5</b> Clientes</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="mgc_round_fill h-10 w-10 flex justify-center items-center rounded-full bg-success/25 text-lg text-success"></i>
                                                </div>
                                                <div class="flex-grow ms-3">
                                                    <h5 class="fw-semibold mb-1">Aves</h5>
                                                    <ul class="flex items-center gap-2">
                                                        <li class="list-inline-item"><b>12</b> Total</li>
                                                        <li class="list-inline-item">
                                                            <div class="w-1 h-1 rounded bg-gray-400"></div>
                                                        </li>
                                                        <li class="list-inline-item"><b>3</b> Clientes</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="flex items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="mgc_round_fill h-10 w-10 flex justify-center items-center rounded-full bg-warning/25 text-lg text-warning"></i>
                                                </div>
                                                <div class="flex-grow ms-3">
                                                    <h5 class="fw-semibold mb-1">Granja</h5>
                                                    <ul class="flex items-center gap-2">
                                                        <li class="list-inline-item"><b>8</b> Total</li>
                                                        <li class="list-inline-item">
                                                            <div class="w-1 h-1 rounded bg-gray-400"></div>
                                                        </li>
                                                        <li class="list-inline-item"><b>4</b> Clientes</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="md:order-2 order-1">
                                        <div id="project-overview-chart" class="apex-charts" data-colors="#3073F1,#ff679b,#0acf97,#ffbc00"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="card">
                            <div class="card-header">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title">Tarea diaria</h4>
                                    <div>
                                        <select class="form-input form-select-sm">
                                            <option selected>Hoy</option>
                                            <option value="1">Ayer</option>
                                            <option value="2">Mañana</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="py-6">
                                <div class="px-6" data-simplebar style="max-height: 304px;">
                                    <div class="space-y-4">
                                        <div class="border border-gray-200 dark:border-gray-700 rounded p-2">
                                            <ul class="flex items-center gap-2 mb-2">
                                                <a href="javascript:void(0);" class="text-base text-gray-600 dark:text-gray-400">Revisar bodega</a>
                                                <i class="mgc_round_fill text-[5px]"></i>
                                                <h5 class="text-sm font-semibold">Hace 2 hrs</h5>
                                            </ul>
                                            <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Organizar el inventario para perros</p>
                                            <p class="text-gray-500 dark:text-gray-400 text-sm"><i class="mgc_group_line text-xl me-1 align-middle"></i> <b>5</b> Personas</p>
                                        </div>

                                        <div class="border border-gray-200 dark:border-gray-700 rounded p-2">
                                            <ul class="flex items-center gap-2 mb-2">
                                                <a href="javascript:void(0);" class="text-base text-gray-600 dark:text-gray-400">Revisar bodega</a>
                                                <i class="mgc_round_fill text-[5px]"></i>
                                                <h5 class="text-sm font-semibold">Hace 2 hrs</h5>
                                            </ul>
                                            <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Organizar el inventario para gatos</p>
                                            <p class="text-gray-500 dark:text-gray-400 text-sm"><i class="mgc_group_line text-xl me-1 align-middle"></i> <b>2</b> Personas</p>
                                        </div>

                                        <div class="border border-gray-200 dark:border-gray-700 rounded p-2">
                                            <ul class="flex items-center gap-2 mb-2">
                                                <a href="javascript:void(0);" class="text-base text-gray-600 dark:text-gray-400">Organizar Stands</a>
                                                <i class="mgc_round_fill text-[5px]"></i>
                                                <h5 class="text-sm font-semibold">Hace 5 hrs</h5>
                                            </ul>
                                            <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Organizar stand de productos</p>
                                            <p class="text-gray-500 dark:text-gray-400 text-sm"><i class="mgc_group_line text-xl me-1 align-middle"></i> <b>2</b> Personas</p>
                                        </div>

                                        <div class="border border-gray-200 dark:border-gray-700 rounded p-2">
                                            <ul class="flex items-center gap-2 mb-2">
                                                <a href="javascript:void(0);" class="text-base text-gray-600 dark:text-gray-400">Revisar facturas</a>
                                                <i class="mgc_round_fill text-[5px]"></i>
                                                <h5 class="text-sm font-semibold">Hace 6 hrs</h5>
                                            </ul>
                                            <p class="text-gray-500 dark:text-gray-400 text-sm mb-1">Revisar facturas por pagar</p>
                                            <p class="text-gray-500 dark:text-gray-400 text-sm"><i class="mgc_group_line text-xl me-1 align-middle"></i> <b>3</b> Personas</p>
                                        </div>

                                        <div class="flex items-center justify-center">
                                            <div class="animate-spin flex">
                                                <i class="mgc_loading_2_line text-xl"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="card">
                            <div class="card-header flex justify-between items-center">
                                <h4 class="card-title">Empleados</h4>
                                <div>
                                    <select class="form-select form-select-sm">
                                        <option selected>Activo</option>
                                        <option value="1">Inactivo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="py-6">
                                <div class="px-6" data-simplebar style="max-height: 304px;">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <img class="me-3 rounded-full" src="{{ asset('assets/images/users/avatar-1.jpg') }}" width="40" alt="Generic placeholder image">
                                            <div class="w-full overflow-hidden">
                                                <h5 class="font-semibold"><a href="javascript:void(0);" class="text-gray-600 dark:text-gray-400">Jhan Carlos</a></h5>
                                                <div class="flex items-center gap-2">
                                                    <div>UI/UX Diseñador</div>
                                                    <i class="mgc_round_fill text-[5px]"></i>
                                                    <div>7.5 Años de experiencia</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex items-center">
                                            <img class="me-3 rounded-full" src="{{ asset('assets/images/users/avatar-2.jpg') }}" width="40" alt="Generic placeholder image">
                                            <div class="w-full overflow-hidden">
                                                <h5 class="font-semibold"><a href="javascript:void(0);" class="text-gray-600 dark:text-gray-400">Cristian Collazosz</a></h5>
                                                <div class="flex items-center gap-2">
                                                    <div>Desarrollador PHP</div>
                                                    <i class="mgc_round_fill text-[5px]"></i>
                                                    <div>2 Años de experiencia</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex items-center">
                                            <img class="me-3 rounded-full" src="{{ asset('assets/images/users/avatar-3.jpg') }}" width="40" alt="Generic placeholder image">
                                            <div class="w-full overflow-hidden">
                                                <h5 class="font-semibold"><a href="javascript:void(0);" class="text-gray-600 dark:text-gray-400">Jose Andres</a></h5>
                                                <div class="flex items-center gap-2">
                                                    <div>Desarrollador Front end</div>
                                                    <i class="mgc_round_fill text-[5px]"></i>
                                                    <div>1 Año de experiencia</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex items-center">
                                            <img class="me-3 rounded-full" src="{{ asset('assets/images/users/avatar-4.jpg') }}" width="40" alt="Generic placeholder image">
                                            <div class="w-full overflow-hidden">
                                                <h5 class="font-semibold"><a href="javascript:void(0);" class="text-gray-600 dark:text-gray-400">Kevin Gómez</a></h5>
                                                <div class="flex items-center gap-2">
                                                    <div>Diseñador UI/UX</div>
                                                    <i class="mgc_round_fill text-[5px]"></i>
                                                    <div>3 Años de experiencia</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex items-center">
                                            <img class="me-3 rounded-full" src="{{ asset('assets/images/users/avatar-5.jpg') }}" width="40" alt="Generic placeholder image">
                                            <div class="w-full overflow-hidden">
                                                <h5 class="font-semibold"><a href="javascript:void(0);" class="text-gray-600 dark:text-gray-400">Diego</a></h5>
                                                <div class="flex items-center gap-2">
                                                    <div>Desarrollador Backend</div>
                                                    <i class="mgc_round_fill text-[5px]"></i>
                                                    <div>2 Años de experiencia</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex items-center">
                                            <img class="me-3 rounded-full" src="{{ asset('assets/images/users/avatar-6.jpg') }}" width="40" alt="Generic placeholder image">
                                            <div class="w-full overflow-hidden">
                                                <h5 class="font-semibold"><a href="javascript:void(0);" class="text-gray-600 dark:text-gray-400">Angel María</a></h5>
                                                <div class="flex items-center gap-2">
                                                    <div>Desarrollador Python</div>
                                                    <i class="mgc_round_fill text-[5px]"></i>
                                                    <div>1 Año de experiencia</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Grid End -->

            </main>

@endsection