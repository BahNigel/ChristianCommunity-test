<!-- Start of Babble -->
<div class="babble tab-pane fade" id="list-request" role="tabpanel" aria-labelledby="list-request-list">
    <!-- Start of Chat -->
    <div class="chat" id="chat3">
        @include('Frontend.chat.include.chatHeader3')
        <div class="content empty">
            <div class="container">
                <div class="col-md-12">
                    <div class="no-messages request">
                        <a href="#"><img class="avatar-xl" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-6.jpg') }}" data-toggle="tooltip" data-placement="top" title="Louis" alt="avatar"></a>
                        <h5>Louis Martinez would like to add you as a contact. <span>Hi Keith, I'd like to add you as a contact.</span></h5>
                        <div class="options">
                            <button class="btn button"><i class="material-icons">check</i></button>
                            <button class="btn button"><i class="material-icons">close</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="bottom">
                    <form class="position-relative w-100">
                        <textarea class="form-control" placeholder="Messaging unavailable" rows="1" disabled></textarea>
                        <button class="btn emoticons disabled" disabled><i class="material-icons">insert_emoticon</i></button>
                        <button class="btn send disabled" disabled><i class="material-icons">send</i></button>
                    </form>
                    <label>
                        <input type="file" disabled>
                        <span class="btn attach disabled d-sm-block d-none"><i class="material-icons">attach_file</i></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Chat -->
</div>
<!-- End of Babble -->