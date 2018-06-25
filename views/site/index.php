<?php

/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
use dosamigos\chartjs\ChartJs;
?>
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-cogs"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Количество <br>продаж</span>
                    <span class="info-box-number">3190<small></small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-plus"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Сумма продаж</span>
                    <span class="info-box-number">5 410 410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-address-book"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Количество <br>клиентов</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-address-book"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Количество <br> товаров</span>
                    <span class="info-box-number">87</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Карта</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="row">
                        <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.5147120444035!2d69.2697913063254!3d41.29766509190512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b0cc379e9c3%3A0xa5a9323b4aa5cb98!2z0KLQsNGI0LrQtdC90YI!5e0!3m2!1sru!2s!4v1522602857506"
                                width="100%" height="400" frameborder="0" style="border:0" >
                        </iframe>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <div class="row">

                <div class="col-md-6">
                    <!-- USERS LIST -->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Сотрудники</h3>

                            <div class="box-tools pull-right">
                                <span class="label label-danger">8 новых сотрудников</span>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="/images/user1-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Сегодня</span>
                                </li>
                                <li>
                                    <img src="/images/user8-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Norman</a>
                                    <span class="users-list-date">Вчера</span>
                                </li>
                                <li>
                                    <img src="/images/user7-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Jane</a>
                                    <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                    <img src="/images/user6-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">John</a>
                                    <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                    <img src="/images/user2-160x160.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander</a>
                                    <span class="users-list-date">13 Jan</span>
                                </li>
                                <li>
                                    <img src="/images/user5-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Sarah</a>
                                    <span class="users-list-date">14 Jan</span>
                                </li>
                                <li>
                                    <img src="/images/user4-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Nora</a>
                                    <span class="users-list-date">15 Jan</span>
                                </li>
                                <li>
                                    <img src="/images/user3-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Nadia</a>
                                    <span class="users-list-date">15 Jan</span>
                                </li>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">Все сотрудники</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!--/.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Диаграмма</h3>

                            <div class="box-tools pull-right">
                                <span class="label label-danger">3 новых товара</span>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding text-center">


                            <?= ChartJs::widget([
                                'type' => 'line',
                                'options' => [
                                    'height' => 400,
                                    'width' => 400
                                ],
                                'data' => [
                                    'labels' => ["Декабрь", "Январь", "Февраль", "Март"],
                                    'datasets' => [
                                        [
                                            'label' => "Вишневый 430г",
                                            'backgroundColor' => "rgba(179,181,198,0.2)",
                                            'borderColor' => "rgba(179,181,198,1)",
                                            'pointBackgroundColor' => "rgba(179,181,198,1)",
                                            'pointBorderColor' => "#fff",
                                            'pointHoverBackgroundColor' => "#fff",
                                            'pointHoverBorderColor' => "rgba(179,181,198,1)",
                                            'data' => [65, 59, 90, 81]
                                        ],
                                        [
                                            'label' => "Абрикосовый 430г",
                                            'backgroundColor' => "rgba(255,99,132,0.2)",
                                            'borderColor' => "rgba(255,99,132,1)",
                                            'pointBackgroundColor' => "rgba(255,99,132,1)",
                                            'pointBorderColor' => "#fff",
                                            'pointHoverBackgroundColor' => "#fff",
                                            'pointHoverBorderColor' => "rgba(255,99,132,1)",
                                            'data' => [28, 48, 40, 19]
                                        ],
                                        [
                                            'label' => "Сливовый 430г",
                                            'backgroundColor' => "rgba(0,99,132,0.2)",
                                            'borderColor' => "rgba(0,99,132,1)",
                                            'pointBackgroundColor' => "rgba(0,99,132,1)",
                                            'pointBorderColor' => "#fff",
                                            'pointHoverBackgroundColor' => "#fff",
                                            'pointHoverBorderColor' => "rgba(0,99,132,1)",
                                            'data' => [88, 18, 60, 25]
                                        ]
                                    ]
                                ]
                            ]);
                            ?>
                            <!--<img src="/images/diagram.png" style="transform: rotate(95deg);" />-->
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="javascript:void(0)" class="uppercase"></a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Последние заказы</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>№ заказа</th>
                                <th>Товар</th>
                                <th>Статус</th>
                                <th>Количество</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Классический PREMIUM 0.3кг</td>
                                <td><span class="label label-success">отправлен</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20">90</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Нежный (Ведро) 1кг</td>
                                <td><span class="label label-warning">в ожидании</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f39c12" data-height="20">68</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>Итальянский сладкий 1кг</td>
                                <td><span class="label label-danger">доставлен</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f56954" data-height="20">83</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>Вишневый 0.43л</td>
                                <td><span class="label label-info">обработка</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00c0ef" data-height="20">61</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                <td>Сливовый 0.43л</td>
                                <td><span class="label label-warning">в ожидании</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f39c12" data-height="20">70</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                <td>Абрикосовый 0.43л</td>
                                <td><span class="label label-danger">доставлен</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#f56954" data-height="20">15</div>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Мексиканский-Шашлычный 1кг</td>
                                <td><span class="label label-success">отправлен</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20">12</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Заказать</a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Просмотр всех заказов</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">



            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Товары</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="chart-responsive">
                                <!--<img src="/images/diagram.png" />-->
                                <?= ChartJs::widget([
                                    'type' => 'pie',
                                    'data' => [
                                        'labels' => ["Мексиканский острый 1кг","Итальянский сладкий 1кг","Чесночный 1кг","Мексиканский-Шашлычный 1кг"],


                                        'datasets' => [
                                            [
                                                'label' => 'level',
                                                'data' => [10,20,30,40],
                                                'backgroundColor' =>  ['blue', 'red', 'yellow', 'green'],

                                            ],
                                        ],
                                    ],
                                    'options' => [
                                        'height' => 400,
                                        'width' => 500,
                                    ],

                                ]);
                                ?>
                            </div>
                            <!-- ./chart-responsive -->
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">Юнусобод
                                <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                        <li><a href="#">Олмазор <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                        </li>
                        <li><a href="#">Чилонзор
                                <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                    </ul>
                </div>
                <!-- /.footer -->
            </div>
            <!-- /.box -->

            <!-- PRODUCT LIST -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Только добавленные товары</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        <li class="item">
                            <div class="product-img">
                                <img src="/images/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Сливовый 0.43л
                                    <span class="label label-warning pull-right">18000</span></a>
                                <span class="product-description">
                          Сливовый 430г
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img src="/images/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Абрикосовый 0.43л
                                    <span class="label label-info pull-right">18000</span></a>
                                <span class="product-description">
                          Абрикосовый 430г
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img src="/images/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Нежный (Ведро) 1кг<span
                                            class="label label-danger pull-right">35000</span></a>
                                <span class="product-description">
                          Нежный (Ведро) 1кг
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img src="/images/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Вишневый 0.43л
                                    <span class="label label-success pull-right">18000</span></a>
                                <span class="product-description">
                          Вишневый 430г
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">Просмотреть все товары</a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>