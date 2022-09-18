@extends('layouts.main')
@section('title')Oil Energy @endsection
@section('content')
    <div class="p-6">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            <div class="ml-4 text-lg leading-7 font-semibold"><p class="text-gray-900 dark:text-white">Отделы</p></div>
        </div>
        <div class="ml-12">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <select name="department_id" id="department_id" class="w-full form-select border rounded shadow" aria-label="Default select example">
                    {{-- <option selected>Выберите отдел</option> --}}
                    <option value='0'>-- Выберите отдел --</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">
                                {{ $department->name }}
                            </option>
                        @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <div class="ml-4 text-lg leading-7 font-semibold"><p class="text-gray-900 dark:text-white">Контрагенты</p></div>
        </div>
        <div class="ml-12">
            <div class="text-gray-600 dark:text-gray-400 text-sm">
                <table>
                    <thead id="columns"></thead>
                    <tbody id="partners" name="partners"></tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type='text/javascript'>
        $(document).ready(function () {
            $('select[name=department_id]').change(function() {
                // get department_id
                var id=$(this).val()
                // empty partners list
                $('#partners').find('tr').remove();
                $('#columns').find('tr').remove();
                // ajax request
                $.ajax({
                    url: '/partners/'+id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        var len = 0;
                        if(response['data'] != null) {
                            len = response['data'].length;
                        }
                        if(len > 0) {
                            var columns = "<thead>\
                                <tr>\
                                    <td>№</td>\
                                    <td>Кортагент</td>\
                                    <td>Сумма</td>\
                                </tr>\
                            </thead>"
                            $("#columns").append(columns);
                            for(var i=0; i<len; i++) {
                                var id = response['data'][i].id;
                                var name = response['data'][i].name;
                                var sum = response['data'][i].sum;
                                var number = i+1
                                var li = "<tbody>\
                                    <tr>\
                                        <td value='"+id+"'>"+number+"</td>\
                                        <td value='"+id+"'>"+name+"</td>\
                                        <td value='"+id+"''>"+sum+"</td>\
                                    </tr>\
                                </tbody>"
                                $("#partners").append(li);
                            }
                        }
                    }
                })
            })
        })
    </script>
@endsection
