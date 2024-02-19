<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Website SDGs</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);"></a>Admin</li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Selamat Datang, Admin</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <!-- BANK -->
                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-blue border-success border">
                                        <i class="fe-dollar-sign font-22 avatar-title text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h1 class="text-dark mt-1"><span data-plugin="counterup"><?= $konsistensi ?></span></h1>
                                        <a href="<?= base_url('Master_konsistensi') ?>">
                                            <h5 class="mt-0 text-primary">Konsistensi</h5>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div>

                <!-- BLOG -->
                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-warning border-success border">
                                        <i class="fe-file-text font-22 avatar-title text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h1 class="text-dark mt-1"><span data-plugin="counterup"><?= $dataEH ?></span></h1>
                                        <a href="<?= base_url('Master_Blog') ?>">
                                            <h5 class="mt-0 text-primary">Data EH</h5>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div>

                <!-- CABANG -->
                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-danger border-success border">
                                        <i class="fe-home font-22 avatar-title text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h1 class="text-dark mt-1"><span data-plugin="counterup"><?= $divisi ?></span></h1>
                                        <a href="<?= base_url('Master_Divisi') ?>">
                                            <h5 class="mt-0 text-primary">Divisi</h5>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div>

                <!-- GUDANG -->
                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-info border-success border">
                                        <i class="fe-truck font-22 avatar-title text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <h1 class="text-dark mt-1"><span data-plugin="counterup"><?= $departemen ?></span></h1>
                                        <a href="<?= base_url('Master_Departemen') ?>">
                                            <h5 class="mt-0 text-primary">Departemen</h5>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div>
            </div>

            <div class="row">
                <!-- USER -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Chart User</h4>
                            <div class="mt-3 chartjs-chart">
                                <canvas id="user" height="150"></canvas>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Chart EH</h4>
                            <div class="mt-4 chartjs-chart">
                                <canvas id="earthhour" height="150"></canvas>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
                
                <!-- STATUS PENJUALAN -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Chart Total EH Perdivision</h4>
                            <div class="mt-4 chartjs-chart">
                                <canvas id="perdivision" height="150"></canvas>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
                


                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <h4 class="header-title">Chart Weight Waste</h4>
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="month" id="weight-date" class="form-control" value="<?= date('Y-m'); ?>">
                                </div>
                            </div>
                            <div class="mt-4 chartjs-chart">
                                <canvas id="weight" height="150"></canvas>
                            </div>
                        </div> 
                    </div>
                </div> 
                <!-- <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                        <div class="row">
                                <div class="col-7 col-md-8">
                                    <h4 class="header-title">Chart Weight Waste</h4>
                                </div>
                                <div class="col-5 col-md-4">
                                    <input type="month" id="weight-date" class="form-control" value="<?= date('Y-m'); ?>">
                                </div>
                            </div>
                            <div class="chartWrapper">
                                <div class="chartAreaWrapper">
                                    <div class="chartAreaWrapper2">
                                        <canvas id="weight" height="300" width="1200"></canvas>
                                    </div>
                                </div>
                                <canvas id="axis-Test" height="300" width="0"></canvas>
                            </div>
                        </div> 
                    </div> 
                </div> -->
                <!-- ///////////////////////////////////////// -->
            </div>
        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Great Green <a href="#">x Politeknik Astra</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<!-- USER -->
<script type="text/javascript">
    var ctx = document.getElementById('user').getContext('2d');
    var arrcolor = [];

    for (var i = 1; i <= 5; i++) {

        arrcolor.push('#' + (Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, '0'));
    }

    var chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [
                <?php
                if (count($user) > 0) {
                    foreach ($user as $data) {
                        echo "'" . $data->rl . "',";
                    }
                }
                ?>
            ],
            datasets: [{
                label: 'User',
                backgroundColor: arrcolor,
                data: [
                    <?php
                    if (count($user) > 0) {
                        foreach ($user as $data) {
                            echo $data->id . ", ";
                        }
                    }
                    ?>
                ]
            }]
        },
    });
</script>

<script type="text/javascript">
    var ctx = document.getElementById('earthhour').getContext('2d');
    var arrcolor = [];
    const bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    for (var i = 1; i <= 5; i++) {

        arrcolor.push('#' + (Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, '0'));
    }

    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: bulan,
            datasets: [{
                    label: 'Total Cost',
                    backgroundColor: 'blue',
                    borderColor: 'blue',
                    fill: false,
                    data: [
                        <?php
                        $temp = array_fill(0, 12, 0);
                        if (count($blog_data) > 0) {
                            foreach ($blog_data as $data) {
                                $temp[$data->bulan - 1] = $data->total_cost;
                            }
                            for ($i = 0; $i < sizeof($temp); $i++) {
                                echo $temp[$i] . ",";
                            }
                        }
                        ?>
                    ]
                },
                {
                    label: 'Total Reduce Cost',
                    backgroundColor: 'red',
                    borderColor: 'red',
                    fill: false,
                    data: [
                        <?php
                        $temp = array_fill(0, 12, 0);
                        if (count($blog_data) > 0) {
                            foreach ($blog_data as $data) {
                                $temp[$data->bulan - 1] = $data->total_reduce_cost;
                            }
                            for ($i = 0; $i < sizeof($temp); $i++) {
                                echo $temp[$i] . ",";
                            }
                        }
                        ?>
                    ]
                }
            ]
        },
    });
</script>

<script type="text/javascript">
    $(document).ready(() => {
        WeightData(new Date().getMonth()+1, new Date().getFullYear())
        $('#weight-date').on('change', () => {
            var monthYear = ($('#weight-date').val()).split('-');
            console.log(getDaysInMonth(monthYear[1], monthYear[0]));
            WeightData(monthYear[1], monthYear[0])
        });

    });

    const getDaysInMonth = (month, year) => {
        const daysInMonth = new Date(year, month, 0).getDate();
        const daysArray = [];

        for (let i = 1; i <= daysInMonth; i++) {
            daysArray.push(i.toString());
        }

        return daysArray;
    }

    function setWeightChart(daysInMonth, data) {
       


    }

    const WeightData = (month, year) => {
        var data;
        var days = getDaysInMonth(month, year);
        $.ajax({
            url: `<?= base_url() ?>/dashboard_admin/get_weight`,
            method: "GET",
            data: {
                month: month,
                year: year
            },
            success: function(response) {
                data = JSON.parse(response);
                var ctx = document.getElementById('weight').getContext('2d');

                for (var i = 1; i <= 5; i++) {
                    arrcolor.push('#' + (Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, '0'));
                }

                var arrOrganik =  new Array(days.length).fill(0), arrNon =  new Array(days.length).fill(0), arrB3 =  new Array(days.length).fill(0);

                // arrOrganik = arrOrganik.fill(0, days.length, 0);
                // arrNon = arrNon.fill(0, days.length, 0);
                // arrB3 = arrB3.fill(0, days.length, 0);

                let idx;
                for(let i = 0; i < days.length; i++){
                    if(typeof data.weight[i] !== 'undefined') {
                        idx = parseInt((data.weight[i].day).split("-")[2]) - 1;
                        arrOrganik[idx] = data.weight[i].organik
                        arrNon[idx] = data.weight[i].non
                        arrB3[idx] = data.weight[i].b3
                    }
                }

                console.log(arrOrganik)


                var chart = new Chart(ctx, {
                    type: 'bar',
                    maintainAspectRatio: true,
                    responsive: false,
                    data: {
                        labels: days,
                        datasets: [{
                                label: 'Total Weight Organik',
                                backgroundColor: 'green',
                                borderColor: 'green',
                                fill: false,
                                data: arrOrganik
                            },
                            {
                                label: 'Total Weight Non Organik',
                                backgroundColor: 'red',
                                borderColor: 'red',
                                fill: false,
                                data: arrNon
                            },
                            {
                                label: 'Total Weight B3',
                                backgroundColor: 'blue',
                                borderColor: 'blue',
                                fill: false,
                                data: arrB3
                            }
                        ]
                    },
                });
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.log("Error: " + error);
            }
        });
        return data;
    }
    function colorize(opaque) {
        return (ctx) => {
            const v = ctx.parsed.y;
            const c = v < -50 ? '#D60000'
            : v < 0 ? '#F46300'
            : v < 50 ? '#0358B6'
            : '#44DE28';

            return opaque ? c : Utils.transparentize(c, 1 - Math.abs(v / 150));
        };
    }
</script>

<script type="text/javascript">
    var ctx = document.getElementById('perdivision').getContext('2d');
    var arrcolor = [];

    for (var i = 1; i <= 5; i++) {
        arrcolor.push('#' + (Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, '0'));
    }

    var chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                <?php
                if (count($total_blog_perdivision) > 0) {
                    foreach ($total_blog_perdivision as $data) {
                        echo "'" . $data->Nama_Divisi . "',";
                    }
                }
                ?>
            ],
            datasets: [{
                label: 'Status',
                backgroundColor: arrcolor,
                data: [
                    <?php
                    if (count($total_blog_perdivision) > 0) {
                        foreach ($total_blog_perdivision as $data) {
                            echo $data->total . ", ";
                        }
                    }
                    ?>
                ]
            }]
        },
    });
</script>
