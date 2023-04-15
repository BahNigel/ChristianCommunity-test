<!-- Start of Babble -->
<div class="babble tab-pane fade active show" id="list-chat" role="tabpanel" aria-labelledby="list-chat-list">
    <!-- Start of Chat -->
    <div class="chat" id="chat1">
        @include('Frontend.chat.include.chatHeader1')
        <div class="content" id="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="date">
                        <hr>
                        <span>Yesterday</span>
                        <hr>
                    </div>
                    <div class="message_box">
                        <div class="message_1">
                            <div class="top">
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="inside">
                                            <a href="#"><img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar"></a>
                                            <div class="status">
                                                <i class="material-icons online">fiber_manual_record</i>
                                            </div>
                                            <div class="data">
                                                <h5><a href="#">Keith Morris</a></h5>
                                                <span>Active now</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons md-30">more_vert</i></button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item connect" name="1"><i class="material-icons">phone_in_talk</i>Voice Call</button>
                                                    <button class="dropdown-item connect" name="1"><i class="material-icons">videocam</i>Video Call</button>
                                                    <hr>
                                                    <button class="dropdown-item"><i class="material-icons">clear</i>Clear History</button>
                                                    <button class="dropdown-item"><i class="material-icons">block</i>Block Contact</button>
                                                    <button class="dropdown-item"><i class="material-icons">delete</i>Delete Contact</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message_body"></div>
                            <div class="message_footer">
                                <div class="feedback">
                                    <div class="feedback_1">
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">34M</button>
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">21K</button>
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">15</button>
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">22</button>
                                    </div>
                                </div>
                                <div class="feedback_2">
                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
                                    {{-- <button class="btn connect d-md-block d-none feedback_2_button select" name="1"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button> --}}
                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button>
                                    {{-- <button class="btn connect d-md-block d-none feedback_2_button select" name="1"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button> --}}
                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-comments-o" aria-hidden="true"></i></button>
                                    {{-- <button class="btn connect d-md-block d-none feedback_2_button select" name="1"><i class="fa fa-comments-o" aria-hidden="true"></i></button> --}}
                                    <button class="follow" name="1">follow</button>
                                    {{-- <button class="follow select" name="1">follow</button> --}}
                                </div>
                                </div>
                                <div class="comments">
                                    <ul>
                                        <li>
                                            <div class="message">
                                                <img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                                                <div class="text-main">
                                                    <div class="text-group">
                                                        <div class="text">
                                                            <p>Coming along nicely, we've got a draft for the client quarries completed.</p>
                                                        </div>
                                                    </div>
                                                    <span>02:56 PM</span>
                                                </div>
                                                <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-commenting-o" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="bottom" style="position: relative;bottom:0px;padding:8px 0px">
                                                <form class="position-relative w-100">
                                                    <textarea class="form-control" placeholder="Drop a comment..." rows="1"></textarea>
                                                    <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                                                    <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                                </form>
                                            </div>
                                        </li>
                                        <ul>
                                            <li style="border-left:1px solid silver; padding: 0px 9px;">
                                                <div class="message">
                                                    <img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                                                    <div class="text-main">
                                                        <div class="text-group">
                                                            <div class="text">
                                                                <p>Coming along nicely, we've got a draft for the client quarries completed.</p>
                                                            </div>
                                                        </div>
                                                        <span>02:56 PM</span>
                                                    </div>
                                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-commenting-o" aria-hidden="true"></i></button>
                                                </div>
                                                {{-- <div class="bottom" style="position: relative;bottom:0px;padding:8px 0px">
                                                    <form class="position-relative w-100">
                                                        <textarea class="form-control" placeholder="Drop a comment..." rows="1"></textarea>
                                                        <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                                                        <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                                    </form>
                                                </div> --}}
                                        </li>
                                        </ul>
                                    </ul>

                                </div>
                                <div class="bottom" style="position: relative;bottom:0px;padding:8px 0px">
                                    <form class="position-relative w-100">
                                        <textarea class="form-control" placeholder="Drop a comment..." rows="1"></textarea>
                                        <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                                        <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="seperator"></div>
                    <div class="message_box">
                        <div class="message_1">
                            <div class="top">
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="inside">
                                            <a href="#"><img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar"></a>
                                            <div class="status">
                                                <i class="material-icons online">fiber_manual_record</i>
                                            </div>
                                            <div class="data">
                                                <h5><a href="#">Keith Morris</a></h5>
                                                <span>Active now</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons md-30">more_vert</i></button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item connect" name="1"><i class="material-icons">phone_in_talk</i>Voice Call</button>
                                                    <button class="dropdown-item connect" name="1"><i class="material-icons">videocam</i>Video Call</button>
                                                    <hr>
                                                    <button class="dropdown-item"><i class="material-icons">clear</i>Clear History</button>
                                                    <button class="dropdown-item"><i class="material-icons">block</i>Block Contact</button>
                                                    <button class="dropdown-item"><i class="material-icons">delete</i>Delete Contact</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message_body"></div>
                            <div class="message_footer">
                                <div class="feedback">
                                    <div class="feedback_1">
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">34M</button>
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">21K</button>
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">15</button>
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">22</button>
                                    </div>
                                </div>
                                <div class="feedback_2">
                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
                                    {{-- <button class="btn connect d-md-block d-none feedback_2_button select" name="1"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button> --}}
                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button>
                                    {{-- <button class="btn connect d-md-block d-none feedback_2_button select" name="1"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button> --}}
                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-comments-o" aria-hidden="true"></i></button>
                                    {{-- <button class="btn connect d-md-block d-none feedback_2_button select" name="1"><i class="fa fa-comments-o" aria-hidden="true"></i></button> --}}
                                    <button class="follow" name="1">follow</button>
                                    {{-- <button class="follow select" name="1">follow</button> --}}
                                </div>
                                </div>
                                <div class="comments">
                                    <ul>
                                        <li>
                                            <div class="message">
                                                <img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                                                <div class="text-main">
                                                    <div class="text-group">
                                                        <div class="text">
                                                            <p>Coming along nicely, we've got a draft for the client quarries completed.</p>
                                                        </div>
                                                    </div>
                                                    <span>02:56 PM</span>
                                                </div>
                                                <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-commenting-o" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="bottom" style="position: relative;bottom:0px;padding:8px 0px">
                                                <form class="position-relative w-100">
                                                    <textarea class="form-control" placeholder="Drop a comment..." rows="1"></textarea>
                                                    <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                                                    <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                                </form>
                                            </div>
                                        </li>
                                        <ul>
                                            <li style="border-left:1px solid silver; padding: 0px 9px;">
                                                <div class="message">
                                                    <img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                                                    <div class="text-main">
                                                        <div class="text-group">
                                                            <div class="text">
                                                                <p>Coming along nicely, we've got a draft for the client quarries completed.</p>
                                                            </div>
                                                        </div>
                                                        <span>02:56 PM</span>
                                                    </div>
                                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-commenting-o" aria-hidden="true"></i></button>
                                                </div>
                                                {{-- <div class="bottom" style="position: relative;bottom:0px;padding:8px 0px">
                                                    <form class="position-relative w-100">
                                                        <textarea class="form-control" placeholder="Drop a comment..." rows="1"></textarea>
                                                        <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                                                        <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                                    </form>
                                                </div> --}}
                                        </li>
                                        </ul>
                                    </ul>

                                </div>
                                <div class="bottom" style="position: relative;bottom:0px;padding:8px 0px">
                                    <form class="position-relative w-100">
                                        <textarea class="form-control" placeholder="Drop a comment..." rows="1"></textarea>
                                        <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                                        <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    <div class="seperator"></div>
                    <div class="date">
                        <hr>
                        <span>Today</span>
                        <hr>
                    </div>
                    <div class="message_box">
                        <div class="message_1">
                            <div class="top">
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="inside">
                                            <a href="#"><img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar"></a>
                                            <div class="status">
                                                <i class="material-icons online">fiber_manual_record</i>
                                            </div>
                                            <div class="data">
                                                <h5><a href="#">Keith Morris</a></h5>
                                                <span>Active now</span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons md-30">more_vert</i></button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="dropdown-item connect" name="1"><i class="material-icons">phone_in_talk</i>Voice Call</button>
                                                    <button class="dropdown-item connect" name="1"><i class="material-icons">videocam</i>Video Call</button>
                                                    <hr>
                                                    <button class="dropdown-item"><i class="material-icons">clear</i>Clear History</button>
                                                    <button class="dropdown-item"><i class="material-icons">block</i>Block Contact</button>
                                                    <button class="dropdown-item"><i class="material-icons">delete</i>Delete Contact</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="message_body"></div>
                            <div class="message_footer">
                                <div class="feedback">
                                    <div class="feedback_1">
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">34M</button>
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">21K</button>
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">15</button>
                                        <button class="btn connect d-md-block d-none feedback_2_button" name="1">22</button>
                                    </div>
                                </div>
                                <div class="feedback_2">
                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
                                    {{-- <button class="btn connect d-md-block d-none feedback_2_button select" name="1"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button> --}}
                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button>
                                    {{-- <button class="btn connect d-md-block d-none feedback_2_button select" name="1"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button> --}}
                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-comments-o" aria-hidden="true"></i></button>
                                    {{-- <button class="btn connect d-md-block d-none feedback_2_button select" name="1"><i class="fa fa-comments-o" aria-hidden="true"></i></button> --}}
                                    <button class="follow" name="1">follow</button>
                                    {{-- <button class="follow select" name="1">follow</button> --}}
                                </div>
                                </div>
                                <div class="comments">
                                    <ul>
                                        <li>
                                            <div class="message">
                                                <img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                                                <div class="text-main">
                                                    <div class="text-group">
                                                        <div class="text">
                                                            <p>Coming along nicely, we've got a draft for the client quarries completed.</p>
                                                        </div>
                                                    </div>
                                                    <span>02:56 PM</span>
                                                </div>
                                                <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-commenting-o" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="bottom" style="position: relative;bottom:0px;padding:8px 0px">
                                                <form class="position-relative w-100">
                                                    <textarea class="form-control" placeholder="Drop a comment..." rows="1"></textarea>
                                                    <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                                                    <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                                </form>
                                            </div>
                                        </li>
                                        <ul>
                                            <li style="border-left:1px solid silver; padding: 0px 9px;">
                                                <div class="message">
                                                    <img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
                                                    <div class="text-main">
                                                        <div class="text-group">
                                                            <div class="text">
                                                                <p>Coming along nicely, we've got a draft for the client quarries completed.</p>
                                                            </div>
                                                        </div>
                                                        <span>02:56 PM</span>
                                                    </div>
                                                    <button class="btn connect d-md-block d-none feedback_2_button" name="1"><i class="fa fa-commenting-o" aria-hidden="true"></i></button>
                                                </div>
                                                {{-- <div class="bottom" style="position: relative;bottom:0px;padding:8px 0px">
                                                    <form class="position-relative w-100">
                                                        <textarea class="form-control" placeholder="Drop a comment..." rows="1"></textarea>
                                                        <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                                                        <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                                    </form>
                                                </div> --}}
                                        </li>
                                        </ul>
                                    </ul>

                                </div>
                                <div class="bottom" style="position: relative;bottom:0px;padding:8px 0px">
                                    <form class="position-relative w-100">
                                        <textarea class="form-control" placeholder="Drop a comment..." rows="1"></textarea>
                                        <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                                        <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                                    </form>
                                </div>
                            </div>

                        </div>
                <div class="seperator_bottom"></div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="bottom">
                    <form class="position-relative w-100">
                        <textarea class="form-control" placeholder="Start typing for reply..." rows="1"></textarea>
                        <button class="btn emoticons"><i class="material-icons">insert_emoticon</i></button>
                        <button type="submit" class="btn send"><i class="material-icons">send</i></button>
                    </form>
                    <label>
                        <input type="file">
                        <span class="btn attach d-sm-block d-none"><i class="material-icons">attach_file</i></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Chat -->
    @include('Frontend.chat.call.chatCall')
</div>
<!-- End of Babble -->