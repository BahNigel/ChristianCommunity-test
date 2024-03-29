<!-- Start of Contacts -->
								<div class="tab-pane fade" id="members">
									<div class="search">
										<form class="form-inline position-relative">
											<input type="search" class="form-control" id="people" placeholder="Search for people...">
											<button type="button" class="btn btn-link loop"><i class="material-icons">search</i></button>
										</form>
										<button class="btn create" data-toggle="modal" data-target="#exampleModalCenter"><i class="material-icons">person_add</i></button>
									</div>
									<div class="list-group sort">
										<button class="btn filterMembersBtn active show" data-toggle="list" data-filter="all">All</button>
										<button class="btn filterMembersBtn" data-toggle="list" data-filter="online">Online</button>
										<button class="btn filterMembersBtn" data-toggle="list" data-filter="offline">Offline</button>
									</div>
									<div class="contacts">
										<h1>Contacts</h1>
										<div class="list-group" id="contacts" role="tablist">
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-1.jpg') }}" data-toggle="tooltip" data-placement="top" title="Janette" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Janette Dalton</h5>
													<p>Sofia, Bulgaria</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-male-1.jpg') }}" data-toggle="tooltip" data-placement="top" title="Michael" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Michael Knudsen</h5>
													<p>Washington, USA</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-2.jpg') }}" data-toggle="tooltip" data-placement="top" title="Lean" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Lean Avent</h5>
													<p>Shanghai, China</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-male-2.jpg') }}" data-toggle="tooltip" data-placement="top" title="Mariette" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Mariette Toles</h5>
													<p>Helena, Montana</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all online contact" data-toggle="list">
												<img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-3.jpg') }}" data-toggle="tooltip" data-placement="top" title="Harmony" alt="avatar">
												<div class="status">
													<i class="material-icons online">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Harmony Otero</h5>
													<p>Indore, India</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Keith" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Keith Morris</h5>
													<p>Chisinau, Moldova</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-female-6.jpg') }}" data-toggle="tooltip" data-placement="top" title="Louis" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Louis Martinez</h5>
													<p>Vienna, Austria</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-male-3.jpg') }}" data-toggle="tooltip" data-placement="top" title="Ryan" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Ryan Foster</h5>
													<p>Oslo, Norway</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
											<a href="#" class="filterMembers all offline contact" data-toggle="list">
												<img class="avatar-md" src="{{ url('/public/assets' . env('USE_MINIFIED') . '/Frontend/img/avatars/avatar-male-4.jpg') }}" data-toggle="tooltip" data-placement="top" title="Mildred" alt="avatar">
												<div class="status">
													<i class="material-icons offline">fiber_manual_record</i>
												</div>
												<div class="data">
													<h5>Mildred Bennett</h5>
													<p>London, United Kingdom</p>
												</div>
												<div class="person-add">
													<i class="material-icons">person</i>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- End of Contacts -->