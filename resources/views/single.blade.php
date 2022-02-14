@extends('layouts.app')

@section('content')
<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1>User Profile</h1>
							<p class="breadcrumbs"><span><a href="index.html">Dashboard</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Student profile
							</p>
						</div>
						<div>
							<a href="user-list.html" class="btn btn-primary">Edit</a>
						</div>
					</div>
					<div class="card bg-white profile-content">
						<div class="row">
							<div class="col-lg-4 col-xl-3">
								<div class="profile-content-left profile-left-spacing">
									<div class="text-center widget-profile px-0 border-0">
										<div class="card-img mx-auto rounded-circle">
											<img src="<?php echo asset('storage/'.$student->photo)?>" alt="user image">
										</div>
										<div class="card-body">
											<h4 class="py-2 text-dark">{{$student->name}}</h4>
											<a class="btn btn-danger my-3" href="/student-action/delete/{{$student->id}}">Delete student</a>
										</div>
									</div>

									<div class="d-flex justify-content-between ">
										<div class="text-center pb-4">
											<h6 class="text-dark pb-2">0</h6>
											<p>Attendance</p>
										</div>

										<div class="text-center pb-4">
											<h6 class="text-dark pb-2">0</h6>
											<p>quizes</p>
										</div>
									</div>

									<hr class="w-100">

									<div class="contact-info pt-4">
										<h5 class="text-dark">Contact Information</h5>
										<p class="text-dark font-weight-medium pt-24px mb-2">Phone number</p>
										<p>{{ $student->phone }}</p>
										<p class="text-dark font-weight-medium pt-24px mb-2">Parent phone number</p>
										<p>{{ $student->parent }}</p>
										<p class="text-dark font-weight-medium pt-24px mb-2">Center location</p>
										<p> <?php 
                                            if ($student->city == 1) {
                                                echo 'Ismailia city';
                                            } elseif ($student->city == 2) {
                                                echo 'Obour city';
                                            } else {
                                                echo 'Cairo city';
                                            }

                                        ?></p>
									</div>
								</div>
							</div>

							<div class="col-lg-8 col-xl-9">
								<div class="profile-content-right profile-right-spacing py-5">
									<ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
												data-bs-target="#profile" type="button" role="tab"
												aria-controls="profile" aria-selected="true">Profile</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="settings-tab" data-bs-toggle="tab"
												data-bs-target="#settings" type="button" role="tab"
												aria-controls="settings" aria-selected="false">Settings</button>
										</li>
									</ul>
									<div class="tab-content px-3 px-xl-5" id="myTabContent">

										<div class="tab-pane fade show active" id="profile" role="tabpanel"
											aria-labelledby="profile-tab">
											<div class="tab-widget mt-5">
												<div class="row">
													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															<div class="icon rounded-circle mr-3 bg-primary">
																<i class="mdi mdi-account-outline text-white "></i>
															</div>

															<div class="media-body align-self-center">
																<h4 class="text-primary mb-2">0</h4>
																<p>Attendance</p>
															</div>
														</div>
													</div>

													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															<div class="icon rounded-circle bg-warning mr-3">
                                                            <i class="mdi mdi-account-outline text-white "></i>
															</div>

															<div class="media-body align-self-center">
																<h4 class="text-primary mb-2">0</h4>
																<p>Reports</p>
															</div>
														</div>
													</div>

													<div class="col-xl-4">
														<div class="media widget-media p-3 bg-white border">
															<div class="icon rounded-circle mr-3 bg-success">
                                                            <i class="mdi mdi-account-outline text-white "></i>
															</div>

															<div class="media-body align-self-center">
																<h4 class="text-primary mb-2">0</h4>
																<p>Quizes</p>
															</div>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-xl-12">

														<!-- Notification Table -->
														<div class="card card-default">
															<div class="card-header justify-content-between mb-1">
																<h2>Reports and Attendance</h2>
																<div>
																	<button class="text-black-50 mr-2 font-size-20"><i
																			class="mdi mdi-cached"></i></button>
																	<div
																		class="dropdown show d-inline-block widget-dropdown">
																		<a class="dropdown-toggle icon-burger-mini"
																			href="#" role="button"
																			id="dropdown-notification"
																			data-bs-toggle="dropdown"
																			aria-haspopup="true" aria-expanded="false"
																			data-display="static"></a>
																		<ul class="dropdown-menu dropdown-menu-right"
																			aria-labelledby="dropdown-notification">
																			<li class="dropdown-item"><a
																					href="#">Action</a></li>
																			<li class="dropdown-item"><a
																					href="#">Another action</a></li>
																			<li class="dropdown-item"><a
																					href="#">Something else here</a>
																			</li>
																		</ul>
																	</div>
																</div>

															</div>
															<div class="card-body compact-notifications" data-simplebar
																style="height: 434px;">

																<div
																	class="media py-3 align-items-center justify-content-between">
																	<div
																		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
																		<i
																			class="mdi mdi-email-outline font-size-20"></i>
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark"
																			href="#">Reports</a>
																		<p>Fetch a full report for this student</p>
																	</div>
																</div>


																<div
																	class="media py-3 align-items-center justify-content-between">
																	<div
																		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
																		<i
																			class="mdi mdi-stack-exchange font-size-20"></i>
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark"
																			href="#">View quizes</a>
																		<p></p>
																	</div>
																	<span class=" font-size-12 d-inline-block"><i
																			class="mdi mdi-clock-outline"></i> 10
																		AM</span>
																</div>

																<div
																	class="media py-3 align-items-center justify-content-between">
																	<div
																		class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
																		<i
																			class="mdi mdi-stack-exchange font-size-20"></i>
																	</div>
																	<div class="media-body pr-3">
																		<a class="mt-0 mb-1 font-size-15 text-dark"
																			href="#">Generate a new serial code</a>
																	</div>
																	<span class=" font-size-12 d-inline-block"><i
																			class="mdi mdi-clock-outline"></i> 10
																		AM</span>
																</div>

															</div>
															<div class="mt-3"></div>
														</div>

													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane fade" id="settings" role="tabpanel"
											aria-labelledby="settings-tab">
											<div class="tab-pane-content mt-5">
												<form method="POST" action="/update/user" enctype="multipart/form-data">
                                                    @csrf
													<div class="form-group row mb-6">
														<label for="coverImage"
															class="col-sm-4 col-lg-2 col-form-label">User Image</label>
														<div class="col-sm-8 col-lg-10">
															<div class="custom-file mb-1">
																<input type="file" class="custom-file-input"
																	id="coverImage" name="photo">
																<label class="custom-file-label" for="coverImage">Choose
																	file...</label>
																<div class="invalid-feedback">Example invalid custom
																	file feedback</div>
															</div>
														</div>
													</div>

													<div class="row mb-2">
														<div class="col-lg-6">
															<div class="form-group">
																<label for="firstName">Full name</label>
																<input type="text" class="form-control" id="firstName"
																	value="{{$student->name}}" name="fname">
															</div>
														</div>
													</div>

													<div class="form-group mb-4">
														<label for="userName">Phone number</label>
														<input type="number" class="form-control" id="userName"
															value="{{ $student->phone }}" name="phone">
														<span class="d-block mt-1">This phone number is used for this student</span>
													</div>

													<div class="form-group mb-4">
														<label for="email">Parents phone number</label>
														<input type="number" class="form-control" id="email"
															value="{{ $student->parent }}" name="parent">
													</div>

													<div class="form-group mb-4">
														<label for="email">Year</label>
														<input type="number" class="form-control" id="email"
															value="{{ $student->year }}" name="year">
													</div>
                                                    
													<div class="form-group mb-4">
														<label for="email">Group</label>
														<input type="number" class="form-control" id="email"
															value="{{ $student->group }}" name="group">
													</div>
                                                                                              

													<div class="d-flex justify-content-end mt-5">
														<button type="submit"
                                                                name="id"
                                                                value="{{$student->id}}"
															class="btn btn-primary mb-2 btn-pill">Update
															Profile</button>
													</div>
												</form>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->    
@endsection