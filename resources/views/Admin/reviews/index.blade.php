@extends('adminlte::page')
@section('title', 'Reviews')
@section('content')
<div class="admin-container">
    <h2>Reviews</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Product</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Created At</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->id }}</td>
                    <td>{{ $review->user->name ?? 'N/A' }}</td>
                    <td>{{ $review->product->name ?? 'N/A' }}</td>
                    <td>{{ $review->rating }} ⭐</td>
                    <td>{{ Str::limit($review->comment, 50) }}</td>
                    <td>{{ $review->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-clipboard-list"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-12 mt-5">
            @if ($reviews->hasPages())
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {{ $reviews->currentPage() == 1 ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $reviews->previousPageUrl() }}" aria-label="Previous">
                                <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                <span class="sr-only"> {{ 'lang.Previous' }} </span>
                            </a>
                        </li>
                        @foreach ($reviews->getUrlRange(1, $reviews->lastPage()) as $pageLink)
                            @php
                                //fuck you php iam mohamed seabeai
                                $pageString = strstr($pageLink, 'page=', false);
                                $rev = strrev($pageString);
                                $pageNum = strstr($rev, '=', true);
                                $pageNum = strrev($pageNum);
                            @endphp
                            <li class="page-item {{ substr($pageLink, -1) == $reviews->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                </a>
                            </li>
                        @endforeach
                        <li class="page-item {{ $reviews->currentPage() == $reviews->lastPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $reviews->nextPageUrl() }}" aria-label="Next">
                                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <span class="sr-only"> {{ 'lang.Next' }} </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            @endif

        </div>
    </div>
</div>
@endsection