@extends('layout.frontend.master')
@section('content')

<!-- HALAMAN UTAMA -->
        <!-- KATEGORI STATISTIK -->
           <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Kategori Statistik</h4>
                                <p class="card-category">Persentase penjualan berdasarkan kategori populer
                                 </p>
                            </div>
                            <div class="card-body ">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i>Hias Bunga
                                    <i class="fa fa-circle text-danger"></i>Hias Daun
                                    <i class="fa fa-circle text-warning"></i>Hias Gantung
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-clock-o"></i> Di Update 2 Menit yang lalu
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KATEGORI PERFORMA PENJUALAN -->
                    <div class="col-md-8">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Statistik Penjualan</h4>
                                <p class="card-category">Performa penjualan dalam 24 jam</p>
                            </div>
                            <div class="card-body ">
                                <div id="chartHours" class="ct-chart"></div>
                            </div>
                            <div class="card-footer ">
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i> Hias Bunga
                                    <i class="fa fa-circle text-danger"></i> Hias Daun
                                    <i class="fa fa-circle text-warning"></i> Hias Gantung
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i> Di Updated 3 menit lalu
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- KATEGORI REKAP TAHUN 2020 -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">PERFORMA 2020</h4>
                                <p class="card-category">Rekap penghasilan per bulan tahun 2020</p>
                            </div>
                            <div class="card-body ">
                                <div id="chartActivity" class="ct-chart"></div>
                            </div>
                            <div class="card-footer ">
                                <div class="legend">
                                    <i class="fa fa-circle text-info"></i> Tanaman Hias
                                    <i class="fa fa-circle text-danger"></i> Benih Tanaman 
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-check"></i> 2020 Database BobaGarden
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card  card-tasks">
                            <div class="card-header ">
                                <h4 class="card-title">Daftar Tugas</h4>
                                <p class="card-category">Tugas Untuk Backend Developer</p>
                            </div>
                            <div class="card-body ">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Menandatangani kontrak untuk Untuk Membuka Bisnis baru di luar Ketapang</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="" checked>
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Memperbaiki bug dari aplikasi BobaGarden Mobile v1.0</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="" checked>
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Memperbaiki bug Frontend Website BobaGarden
                                                </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" checked>
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Melengkapi Data-data di Backend Website (admin Website) BobaGarden</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Membuat Database </td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="now-ui-icons loader_refresh spin"></i> Di Updated 3 menit yang lalu                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop