<!-- Start of Babble -->
<div class="babble tab-pane fade" id="list-empty" role="tabpanel" aria-labelledby="list-empty-list">
    <!-- Start of Chat -->
    <div class="chat" id="chat2">
        @include('Frontend.chat.include.chatHeader2')
        <div class="content empty">
            <div class="container">
                <div class="col-md-12">
                    <div class="no-messages">
                        <i class="material-icons md-48">forum</i>
                        <p>Seems people are shy to start the chat. Break the ice send the first message.</p>
                    </div>
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
    <!-- Start of Call -->
    <div class="call" id="call2">
        <div class="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="inside">
                        <div class="panel">
                            <div class="participant">
                                <img class="avatar-xxl" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-2.jpg') }}" alt="avatar">
                                <span>Connecting</span>
                            </div>
                            <div class="options">
                                <button class="btn option"><i class="material-icons md-30">mic</i></button>
                                <button class="btn option"><i class="material-icons md-30">videocam</i></button>
                                <button class="btn option call-end"><i class="material-icons md-30">call_end</i></button>
                                <button class="btn option"><i class="material-icons md-30">person_add</i></button>
                                <button class="btn option"><i class="material-icons md-30">volume_up</i></button>
                            </div>
                            <button class="btn back" name="2"><i class="material-icons md-24">chat</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Call -->
</div>
<!-- End of Babble -->