<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Temperature Report</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Temperature Report</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="table-responsive">
                    <table class="table table-hover manage-u-table">
                        <thead>
                            <tr>
                                <th width="70" class="text-center">#</th>
                                <th>DATE</th>
                                <th>TEMP (&#8451;)</th>
                                <th>HUMIDITY (%)</th>
                                <th>STATUS</th>
                                <th width="300">MANAGE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>15 Mar 1988</td>
                                <td>25</td>
                                <td>78</td>
                                <td><span class="label label-danger">hot</span> </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg" data-toggle="modal" data-target="#modal-detail"><i class="fa fa-share-square-o"></i> </button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg"><i class="fa fa-trash-o"></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>16 Mar 1988</td>
                                <td>25</td>
                                <td>78</td>
                                <td><span class="label label-danger">hot</span> </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg"><i class="fa fa-share-square-o"></i> </button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg"><i class="fa fa-trash-o"></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>17 Mar 1988</td>
                                <td>25</td>
                                <td>78</td>
                                <td><span class="label label-danger">hot</span> </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg"><i class="fa fa-share-square-o"></i> </button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg"><i class="fa fa-trash-o"></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>18 Mar 1988</td>
                                <td>25</td>
                                <td>78</td>
                                <td><span class="label label-danger">hot</span> </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg"><i class="fa fa-share-square-o"></i> </button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg"><i class="fa fa-trash-o"></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>19 Mar 1988</td>
                                <td>25</td>
                                <td>78</td>
                                <td><span class="label label-danger">hot</span> </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg"><i class="fa fa-share-square-o"></i> </button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg"><i class="fa fa-trash-o"></i> </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal-detail" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Temperature Detail</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6" style="border-right: 1px solid #E0E3DA">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Temp</th>
                                        <th>Humidity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>06:00</td>
                                        <td>25&#8451;</td>
                                        <td>40%</td>
                                        <td><span class="label label-danger">hot</span> </td>
                                    </tr>
                                    <tr>
                                        <td>07:00</td>
                                        <td>24&#8451;</td>
                                        <td>74%</td>
                                        <td><span class="label label-info">cool</span> </td>
                                    </tr>
                                    <tr>
                                        <td>08:00</td>
                                        <td>15&#8451;</td>
                                        <td>72%</td>
                                        <td><span class="label label-warning"> nor </span> </td>
                                    </tr>
                                    <tr>
                                        <td>09:00</td>
                                        <td>28&#8451;</td>
                                        <td>73%</td>
                                        <td><span class="label label-warning">nor</span> </td>
                                    </tr>
                                    <tr>
                                        <td>10:00</td>
                                        <td>17&#8451;</td>
                                        <td>28%</td>
                                        <td><span class="label label-warning">nor</span> </td>
                                    </tr>
                                    <tr>
                                        <td>11:00</td>
                                        <td>27&#8451;</td>
                                        <td>49%</td>
                                        <td><span class="label label-danger">hot</span> </td>
                                    </tr>
                                    <tr>
                                        <td>12:00</td>
                                        <td>27&#8451;</td>
                                        <td>49%</td>
                                        <td><span class="label label-danger">hot</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Temp</th>
                                        <th>Humidity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>13:00</td>
                                        <td>25&#8451;</td>
                                        <td>40%</td>
                                        <td><span class="label label-danger">hot</span> </td>
                                    </tr>
                                    <tr>
                                        <td>14:00</td>
                                        <td>24&#8451;</td>
                                        <td>74%</td>
                                        <td><span class="label label-info">cool</span> </td>
                                    </tr>
                                    <tr>
                                        <td>15:00</td>
                                        <td>15&#8451;</td>
                                        <td>72%</td>
                                        <td><span class="label label-warning">nor</span> </td>
                                    </tr>
                                    <tr>
                                        <td>16:00</td>
                                        <td>28&#8451;</td>
                                        <td>73%</td>
                                        <td><span class="label label-warning">nor</span> </td>
                                    </tr>
                                    <tr>
                                        <td>17:00</td>
                                        <td>17&#8451;</td>
                                        <td>28%</td>
                                        <td><span class="label label-warning">nor</span> </td>
                                    </tr>
                                    <tr>
                                        <td>18:00</td>
                                        <td>27&#8451;</td>
                                        <td>49%</td>
                                        <td><span class="label label-danger">hot</span> </td>
                                    </tr>
                                    <tr>
                                        <td>19:00</td>
                                        <td>27&#8451;</td>
                                        <td>49%</td>
                                        <td><span class="label label-danger">hot</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>