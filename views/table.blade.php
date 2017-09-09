@extends('easy-crud::layout')

@section('content')
<div class="x_panel">
    <div class="x_content">
        <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
                <thead>
                    <tr class="headings">
                        <th class="column-title" style="display: table-cell;">Id</th>
                        @foreach($properties as $property)
                            <th class="column-title" style="display: table-cell;">{{ ucfirst($property) }}</th>
                        @endforeach
                        <th class="column-title no-link last" style="display: table-cell;">
                            <span class="nobr">Action</span>
                        </th>

                        <th class="bulk-actions" colspan="7" style="display: none;">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($table_content) == 0)
                        <tr class="even pointer text-center">
                            <td colspan="{{ count($properties) + 2 }}">There is no data to show</td>
                        </tr>
                    @endif
                    @foreach($table_content as $key => $row)
                        <tr class="{{ $key % 2 == 0 ? 'odd' : 'even' }} pointer">
                            <td>{{ $row->id }}</td>
                            @foreach($properties as $property)
                                <td class=" ">
                                    <a href="{{ $url_base }}/{{ $model }}/update/{{ $row->id }}">{{ $row->$property }}</a>
                                </td>
                            @endforeach
                            <td>
                                <a href="{{ $url_base }}/{{ $model }}/delete/{{ $row->id }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection