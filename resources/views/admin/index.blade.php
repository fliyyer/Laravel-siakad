@extends('template_backend.home')
@section('heading', 'Dashboard')
@section('page')
<li class="breadcrumb-item active">Admin</li>
<li class="breadcrumb-item active">Dashboard</li>
@endsection
@section('content')
<div class="col-lg-4 col-6">
    <div class="small-box bg-info">
        <div class="inner">
            <h3>{{ $jadwal }}</h3>
            <p>Jadwal</p>
        </div>
        <div class="icon">
            <i class="fas fa-calendar-alt nav-icon"></i>
        </div>
        <a href="{{ route('jadwal.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-4 col-6">
    <div class="small-box bg-warning">
        <div class="inner" style="color: #FFFFFF;">
            <h3>{{ $guru }}</h3>
            <p>Guru</p>
        </div>
        <div class="icon">
            <i class="fas fa-id-card nav-icon"></i>
        </div>
        <a href="{{ route('guru.index') }}" style="color: #FFFFFF !important;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-4 col-6">
    <div class="small-box bg-success">
        <div class="inner">
            <h3>{{ $siswa }}</h3>
            <p>Siswa</p>
        </div>
        <div class="icon">
            <i class="fas fa-id-card nav-icon"></i>
        </div>
        <a href="{{ route('siswa.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-4 col-6">
    <div class="small-box bg-danger">
        <div class="inner">
            <h3>{{ $kelas }}</h3>
            <p>Kelas</p>
        </div>
        <div class="icon">
            <i class="fas fa-home nav-icon"></i>
        </div>
        <a href="{{ route('kelas.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-4 col-6">
    <div class="small-box bg-primary">
        <div class="inner">
            <h3>{{ $mapel }}</h3>
            <p>Mapel</p>
        </div>
        <div class="icon">
            <i class="fas fa-book nav-icon"></i>
        </div>
        <a href="{{ route('mapel.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<div class="col-lg-4 col-6">
    <div class="small-box bg-secondary">
        <div class="inner">
            <h3>{{ $user }}</h3>
            <p>User Registrations</p>
        </div>
        <div class="icon">
            <i class="fas fa-user-plus nav-icon"></i>
        </div>
        <a href="{{ route('user.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        'use strict'

        var pieChartCanvasGuru = $('#pieChartGuru').get(0).getContext('2d')
        var pieDataGuru = {
            labels: [
                'Laki-laki',
                'Perempuan',
            ],
            datasets: [{
                data: [{
                    {
                        $gurulk
                    }
                }, {
                    {
                        $gurupr
                    }
                }],
                backgroundColor: ['#007BFF', '#DC3545'],
            }]
        }
        var pieOptions = {
            legend: {
                display: false
            }
        }
        var pieChart = new Chart(pieChartCanvasGuru, {
            type: 'doughnut',
            data: pieDataGuru,
            options: pieOptions
        })

        var pieChartCanvasSiswa = $('#pieChartSiswa').get(0).getContext('2d')
        var pieDataSiswa = {
            labels: [
                'Laki-laki',
                'Perempuan',
            ],
            datasets: [{
                data: [{
                    {
                        $siswalk
                    }
                }, {
                    {
                        $siswapr
                    }
                }],
                backgroundColor: ['#007BFF', '#DC3545'],
            }]
        }
        var pieOptions = {
            legend: {
                display: false
            }
        }
        var pieChart = new Chart(pieChartCanvasSiswa, {
            type: 'doughnut',
            data: pieDataSiswa,
            options: pieOptions
        })


        var pieChartCanvasPaket = $('#pieChartPaket').get(0).getContext('2d')
        var pieDataPaket = {
            labels: [
                'Bisnis kontruksi dan Properti',
                'Desain Permodelan dan Informasi Bangunan',
                'Elektronika Industri',
                'Otomasi Industri',
                'Teknik dan Bisnis Sepeda Motor',
                'Rekayasa Perangkat Lunak',
                'Teknik Pemesinan',
                'Teknik Pengelasan',
            ],
            datasets: [{
                data: [{
                    {
                        $bkp
                    }
                }, {
                    {
                        $dpib
                    }
                }, {
                    {
                        $ei
                    }
                }, {
                    {
                        $oi
                    }
                }, {
                    {
                        $tbsm
                    }
                }, {
                    {
                        $rpl
                    }
                }, {
                    {
                        $tpm
                    }
                }, {
                    {
                        $las
                    }
                }],
                backgroundColor: ['#d4c148', '#ba6906', '#ff990a', '#00a352', '#2cabe6', '#999999', '#0b2e75', '#7980f7'],
            }]
        }
        var pieOptions = {
            legend: {
                display: false
            }
        }
        var pieChart = new Chart(pieChartCanvasPaket, {
            type: 'doughnut',
            data: pieDataPaket,
            options: pieOptions
        })
    })

    $("#Dashboard").addClass("active");
    $("#liDashboard").addClass("menu-open");
    $("#AdminHome").addClass("active");
</script>
@endsection