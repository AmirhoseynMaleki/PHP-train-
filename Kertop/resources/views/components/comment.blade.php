<div>
    <div class="card p-3 mt-3">

        <div class="d-flex justify-content-between align-items-center">

            <div class="user d-flex flex-row align-items-center">

                <img src="/assets/img/avatar.jpg" width="30" class="user-img rounded-circle mr-2">
                <span class="ms-2"><small class="font-weight-bold text-primary">{{ $message->fullName }}</small> <small
                        class="font-weight-bold">{{ $message->message }}</small></span>

            </div>


            <small>{{ $message->created_at }}</small>

        </div>


        <div class="action d-flex justify-content-between mt-2 align-items-center">

            <div class="reply px-4">
                <small>Remove</small>
                <span class="dots"></span>
                <small>Reply</small>
                <span class="dots"></span>
                <small>Edit</small>

            </div>

            <div class="icons align-items-center">

                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-check-circle-o check-icon"></i>

            </div>
        </div>
    </div>
</div>