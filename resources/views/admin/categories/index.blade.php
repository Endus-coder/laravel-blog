@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    @component('admin.components.breadcrumb')
        @slot('title') Список категорий @endslot
        @slot('parent') Главная @endslot
        @slot('active') Категорий @endslot


    @endcomponent

    <hr>

        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">
            <i class="fa-fa-plus-square-o"> Создать категорию</i>
            <table class="table table-striped">
                <thead>
                    <th>Наименование</th>
                    <th>Публикация</th>
                    <th class="text-right"> Действие</th>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td>{{$category->title}}</td>
                            <td>{{$category->published}}</td>
                            <td>
                                <a href="{{route('admin.category.edit', ['id' => $category['id']])}}">
                                <i class="fa fa-edit"></i></a>

                            </td>

                        </tr>

                    @empty
                        <tr>
                            <td colspan="3" class="text-center">
                                <h2> Данные отсуствуют</h2>
                            </td>
                        </tr>



                    @endforelse




                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">
                            <ul class="pagination pull-right">
                            {{$categories->links()}}

                            </ul>
                        </td>
                    </tr>
                </tfoot>

            </table>
        </a>
</div>



    @endsection
