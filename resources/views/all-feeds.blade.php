@extends('layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-8">

            <h6 class="mt-4 mb-0"><b>
                全部動態
            </b></h6>

            <div class="card mt-2">
                <ul class="list-group list-group-flush">
                    @foreach ($records as $record)
                        @if ($record['type'] === 'add')
                            @include('feeds/add')
                        @endif
                        @if ($record['type'] === 'editing')
                            @include('feeds/editing')
                        @endif
                        @if ($record['type'] === 'review')
                            @include('feeds/review')
                        @endif
                        @if ($record['type'] === 'comment')
                            @include('feeds/comment')
                        @endif
                        @if ($record['type'] === 'tag')
                            @include('feeds/tag')
                        @endif
                        @if ($record['type'] === 'photo')
                            @include('feeds/photo')
                        @endif
                    @endforeach
                </ul>
                @if (count($records) === 0)
                    <div class="card-body">
                        還沒有紀錄。
                    </div>
                @endif
            </div>

            <div class="mt-3" style="overflow: auto;">
                {{ $records->links() }}
            </div>

        </div>
    </div>

</div>

<div class="mt-4"></div>

@endsection
