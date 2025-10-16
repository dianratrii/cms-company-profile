<main class="grow content" id="content" role="content">
    <!-- Container -->
    <div class="container-fixed">
        <div class="grid gap-5 lg:gap-7.5">
            <div class="card pb-2.5">
                <div class="card-header" id="basic_settings">
                    <h3 class="card-title">
                        Create Page
                    </h3>
                </div>
                <div class="card-body grid gap-5">
                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">
                            Name
                        </label>
                        <input class="input" type="text" placeholder="Page Name"/>
                    </div>
                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">
                            Path
                        </label>
                        <input class="input" type="text" placeholder="Page Slug"/>
                    </div>
                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">
                            Robots
                        </label>
                        <div class="flex items-center gap-2">
                            <label class="switch switch-sm">
                                <input checked="" name="check" type="checkbox" value="1"/>
                            </label>
                        </div>
                    </div>
                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">
                            Descriptions
                        </label>
                        <textarea
                            rows="6"
                            class="input h-auto p-3 resize-none w-[600px] h-[150px]"
                            placeholder="Page Meta Descriptions"
                        ></textarea>
                    </div>
                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">
                            Keywords
                        </label>
                        <textarea
                            rows="6"
                            class="input h-auto p-3 resize-none w-[600px] h-[150px]"
                            placeholder="Page Meta Keywords"
                        ></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button class="btn btn-primary">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
{{--            <div class="card pb-2.5">--}}
{{--                <div class="card-header" id="password_settings">--}}
{{--                    <h3 class="card-title">--}}
{{--                        Password--}}
{{--                    </h3>--}}
{{--                </div>--}}
{{--                <div class="card-body grid gap-5">--}}
{{--                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">--}}
{{--                        <label class="form-label max-w-56">--}}
{{--                            Current Password--}}
{{--                        </label>--}}
{{--                        <input class="input" placeholder="Your current password" type="text" value=""/>--}}
{{--                    </div>--}}
{{--                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">--}}
{{--                        <label class="form-label max-w-56">--}}
{{--                            New Password--}}
{{--                        </label>--}}
{{--                        <input class="input" placeholder="New password" type="text" value=""/>--}}
{{--                    </div>--}}
{{--                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">--}}
{{--                        <label class="form-label max-w-56">--}}
{{--                            Confirm New Password--}}
{{--                        </label>--}}
{{--                        <input class="input" placeholder="Confirm new password" type="text" value=""/>--}}
{{--                    </div>--}}
{{--                    <div class="flex justify-end">--}}
{{--                        <button class="btn btn-primary">--}}
{{--                            Reset Password--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</main>
