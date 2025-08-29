{{-- <td class="d-flex"> --}}
    @extends('adminlte::page')
    @section('content')
        <h2>Categories</h2>
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif

        @if (session()->has('updated'))
            <div class="alert alert-success">
                {{ session()->get('updated') }}
            </div>
        @endif
        <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Add Category</i>
        </a>

        <table class="table">
            <thead>
                <th>id</th>
                <th>Category name</th>
                {{-- <th>Description</th> --}}
                <th>Actions</th>
            </thead>
            <tbody>
                <tr>
                    @foreach ($categories as $category)
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            {{-- <td>{{ $category->description }}</td> --}}
                            <td>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"> <i
                                            class="fas fa-minus-circle"></i> </button>
                                </form>
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm"><i
                                        class="fas fa-clipboard-list"></i></a>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach

            </tbody>
        </table>

        <div class="row">
            <div class="col-12 mt-5">
                @if ($categories->hasPages())
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item {{ $categories->currentPage() == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $categories->previousPageUrl() }}" aria-label="Previous">
                                    <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                    <span class="sr-only"> {{ 'lang.Previous' }} </span>
                                </a>
                            </li>
                            @foreach ($categories->getUrlRange(1, $categories->lastPage()) as $pageLink)
                                @php
                                    //fuck you php iam mohamed seabeai
                                    $pageString = strstr($pageLink, 'page=', false);
                                    $rev = strrev($pageString);
                                    $pageNum = strstr($rev, '=', true);
                                    $pageNum = strrev($pageNum);
                                @endphp
                                <li class="page-item {{ substr($pageLink, -1) == $categories->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                    </a>
                                </li>
                            @endforeach
                            <li class="page-item {{ $categories->currentPage() == $categories->lastPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $categories->nextPageUrl() }}" aria-label="Next">
                                    <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    <span class="sr-only"> {{ 'lang.Next' }} </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                @endif

            </div>
        </div>


        @section('js')
            <script>
                document.querySelectorAll('.delete-category').forEach(btn => {
                    btn.addEventListener('click', function (e) {
                        const Action = confirm('are you sure you want to delete');
                        if (!Action) e.preventDefault();
                    })
                })
            </script>
        @endsection

    @endsection