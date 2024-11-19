@extends('layout')

@section('titulo')NutriControl | Calendario @endsection
@section('content')
             <main class="flex-grow p-6">

                <!-- Page Title Start -->
                <div class="flex justify-between items-center mb-6">
                    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Calendar</h4>

                    <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
                        <div class="flex items-center gap-2">
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Konrix</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Apps</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">Calendar</a>
                        </div>
                    </div>
                </div>
                <!-- Page Title End -->

                <div class="grid lg:grid-cols-4 gap-6">
                    <div class="card">
                        <div class="p-6">
                            <button class="px-3 py-2 rounded bg-primary text-white text-base w-full mb-4" id="btn-new-event"><i class="mgc_add_line"></i> Nuevo evento</button>

                            <div class="flex flex-col gap-1" id="external-events">
                                <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">Arrastre y suelte su evento o haga clic en el calendario</p>
                                <button class="external-event bg-success px-3 py-2 rounded text-white text-base text-start w-full mb-2" data-class="bg-success">
                                    <i class="mgc_round_fill me-3 vertical-middle"></i>Registrar productos
                                </button>
                                <button class="external-event bg-info px-3 py-2 rounded text-white text-base text-start w-full mb-2" data-class="bg-info">
                                    <i class="mgc_round_fill me-3 vertical-middle"></i>Llevar a la bodega
                                </button>
                                <button class="external-event bg-warning px-3 py-2 rounded text-white text-base text-start w-full mb-2" data-class="bg-warning">
                                    <i class="mgc_round_fill me-3 vertical-middle"></i>Revisar facturas
                                </button>
                                <button class="external-event bg-danger px-3 py-2 rounded text-white text-base text-start w-full mb-2" data-class="bg-danger">
                                    <i class="mgc_round_fill me-3 vertical-middle"></i>Revisar inventario
                                </button>
                            </div>

                            <div class="mt-5">
                                <h5 class="text-center mb-2">¿Cómo funciona?</h5>

                                <ul class="ps-3">
                                    <li class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                                        Ha sobrevivido no sólo cinco siglos, sino también el salto a la composición tipográfica electrónica, manteniéndose esencialmente inalterado.
                                    </li>
                                    <li class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                                        Richard McClintock, profesor de latín en el Hampden-Sydney College de Virginia, buscó una de las palabras latinas más oscuras, consectetur, en un pasaje de Lorem Ipsum.
                                    </li>
                                    <li class="text-sm text-slate-700 dark:text-slate-400 mb-3">
                                        Ha sobrevivido no sólo cinco siglos, sino también el salto a la composición tipográfica electrónica, manteniéndose esencialmente inalterado.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3">
                        <div class="card">
                            <div class="p-6">
                                <div id="calendar"></div>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>
            </main>

@endsection

@section('extra_js')
<script src="{{ asset('assets/libs/fullcalendar/index.global.min.js') }}"></script>
<!-- Calendar Js -->
<script src="{{ asset('assets/js/pages/apps-calendar.js') }}"></script>
@endsection
