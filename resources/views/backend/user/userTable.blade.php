{{--    required: $users    --}}

<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                @if(auth()->user()->type == 1)
                    <th class="text-secondary opacity-7"></th>
                @endif
            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="{{asset('storage/' . $user->img)}}" class="avatar avatar-sm me-3 object-fit-cover" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <a href="{{ route('user', $user->id) }}" class="btn-link">{{ $user->name }}</a>
                                <p class="text-xs text-secondary mb-0"> {{ $user->email }} </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs mb-0"> {{ $user->function }} </p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        @if($user->type == 1)
                            <span class="badge badge-sm bg-gradient-primary">Super Admin</span>
                        @elseif($user->type == 2)
                            <span class="badge badge-sm bg-gradient-success">Admin</span>
                        @else
                            <span class="badge badge-sm bg-gradient-secondary">Regular User</span>
                        @endif
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"> {{ $user->created_at->format('d/m/y') }} </span>
                    </td>
                    @if(auth()->user()->type == 1)
                        <td class="align-middle">
                            <a href="{{ route('user.edit', $user->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                            </a>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>