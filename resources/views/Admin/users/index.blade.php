    @extends('adminlte::page')
    @section('content')

        <table class="table">
            <thead>
                <th>id</th>
                <th>User name</th>
                <th>email</th>
                <th>Phone number</th>
                <th>Shipping address</th>
                <th>Billing address</th>
                <th>Role</th>
                <th>Show</th>
            </thead>
            <tbody>
                <tr>
                    @foreach ($users as $user)
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->shipping_address }}</td>
                            <td>{{ $user->billing_address }}</td>
                            <td>{{ $user->role }}</td>
                            <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-primary"><i
                                        class="fas fa-clipboard-list"></i></a></td>
                        </tr>
                    @endforeach

            </tbody>
        </table>

        <div class="row">
            <div class="col-12 mt-5">
                @if ($users->hasPages())
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item {{ $users->currentPage() == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $users->previousPageUrl() }}" aria-label="Previous">
                                    <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                    <span class="sr-only"> {{ 'lang.Previous' }} </span>
                                </a>
                            </li>
                            @foreach ($users->getUrlRange(1, $users->lastPage()) as $pageLink)
                                @php
                                    //fuck you php iam mohamed seabeai
                                    $pageString = strstr($pageLink, 'page=', false);
                                    $rev = strrev($pageString);
                                    $pageNum = strstr($rev, '=', true);
                                    $pageNum = strrev($pageNum);
                                @endphp
                                <li class="page-item {{ substr($pageLink, -1) == $users->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $pageLink }}">{{ $pageNum }}
                                    </a>
                                </li>
                            @endforeach
                            <li class="page-item {{ $users->currentPage() == $users->lastPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $users->nextPageUrl() }}" aria-label="Next">
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