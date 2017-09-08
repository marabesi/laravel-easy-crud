@extends('easy-crud::layout')

@section('content')
<div class="clearfix"></div>
<div>
    <div class="x_panel">
        <div class="x_title">
        <h2>Table design <small>Custom design</small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
            </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                <thead>
                    <tr class="headings">
                        <th>
                            <div class="icheckbox_flat-green" style="position: relative;"><input id="check-all" class="flat" style="position: absolute; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
                        </th>

                        @foreach($properties as $property)
                            <th class="column-title" style="display: table-cell;">{{ $property }}</th>
                        @endforeach
                        <th class="column-title no-link last" style="display: table-cell;"><span class="nobr">Action</span>
                        </th>

                        <th class="bulk-actions" colspan="7" style="display: none;">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($table_content as $row)
                        <tr class="even pointer">
                            <td class="a-center ">
                                <div class="icheckbox_flat-green" style="position: relative;"><input class="flat" name="table_records" style="position: absolute; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
                            </td>
                            @foreach($properties as $property)
                                <td class=" ">
                                    <a href="{{ $url_base }}/{{ $model }}/update/{{ $row->id }}">{{ $row->$property }}</a>
                                </td>
                            @endforeach
                            <td><a href="#">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection