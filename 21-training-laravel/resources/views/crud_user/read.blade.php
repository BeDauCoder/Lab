@extends('dashboard')

@section('content')
    <main class="login-form">

        {{-- Chi Tiết Users --}}
        <div class="container">
            <div class="row justify-content-center">
                <h4>Chi Tiết User</h4>
                <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Danh Sách Bài Viết --}}
        <div class="container mt-5">
            <div class="row justify-content-center">
                <h4>Danh Sách Bài Viết Đã Viết (1-N)</h4>
                <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Post Name</th>
                        <th>Post Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->post as $post)
                        <tr>
                            <td>{{ $post->post_id }}</td>
                            <td>{{ $post->post_name }}</td>
                            <td>{{ $post->post_description }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Danh Sách Sở Thích --}}
        <div class="container mt-5">
            <div class="row justify-content-center">
                <h4>Danh Sách Sở Thích (N-N)</h4>
                <table>
                    <thead>
                    <tr>
                        <th>Favorite ID</th>
                        <th>Favorite Name</th>
                        <th>Favorite Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user->favorites as $favorite)
                        <tr>
                            <td>{{ $favorite->favorite_id }}</td>
                            <td>{{ $favorite->favorite_name }}</td>
                            <td>{{ $favorite->favorite_description }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main>
@endsection
