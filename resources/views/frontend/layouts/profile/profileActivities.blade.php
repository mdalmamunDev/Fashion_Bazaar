<div class="tab-pane fade" id="activities-tab-pane" role="tabpanel" aria-labelledby="activities-tab" tabindex="0">
    @foreach($activities as $activity)
        {{ $activity }}
        <div class="p-3 d-flex align-items-center bg-light border-bottom osahan-post-header">
        <div class="dropdown-list-image rounded-circle mr-3 box-sm box-bg-red overflow-hidden">
            <img class="img-cover" src="{{ asset('frontend/images/logo.png') }}" alt="">
        </div>
        <div class="font-weight-bold mr-3">
            <div class="text-truncate">You sent a testimonial</div>
{{--            <div class="small">{{ strlen($activity->content)>110 ? substr($activity->content, 0, 110).'...' : $activity->content }}</div>--}}
            <div class="small">{{ $activity->obj->content }}</div>
        </div>
        <span class="ml-auto mb-auto">
            <div class="btn-group d-block">
                <button type="button" class="btn btn-light btn-sm rounded d-block ml-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <form action="{{ route('testimonial.destroy', $activity->id) }}" method="post"  onsubmit="return confirm('Are you sure you want to delete this?');">
                        {{ csrf_field() }}
                        @method("DELETE")
                        <button class="dropdown-item" type="submit">
                            <i class="mdi mdi-delete"></i> Delete
                        </button>
                    </form>
                    <button class="dropdown-item" type="button">
                        <i class="mdi mdi-close"></i> Turn Off
                    </button>
                </div>
            </div>
            <div class="text-right text-muted pt-1 d-flex justify-content-center">{{ $activity->relative_time }}</div>
        </span>
    </div>
    @endforeach
</div>