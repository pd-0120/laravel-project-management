
<!DOCTYPE html>
<!--
Template Name: Keen - The Ultimate Bootstrap 4 HTML Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/
Support: https://keenthemes.com/theme-support
License: You must have a valid license purchased only from themes.getbootstrap.com(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Keen | Dashboard</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="assets/media/logos/logo-1.svg" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-5" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="index.html" class="brand-logo">
							<img alt="Logo" src="assets/media/logos/logo-1.svg" class="h-30px" />
						</a>
						<!--end::Logo-->
						<!--begin::Toggle-->
						<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Toggle-Right.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path fill-rule="evenodd" clip-rule="evenodd" d="M22 11.5C22 12.3284 21.3284 13 20.5 13H3.5C2.6716 13 2 12.3284 2 11.5C2 10.6716 2.6716 10 3.5 10H20.5C21.3284 10 22 10.6716 22 11.5Z" fill="black" />
										<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14.5 20C15.3284 20 16 19.3284 16 18.5C16 17.6716 15.3284 17 14.5 17H3.5C2.6716 17 2 17.6716 2 18.5C2 19.3284 2.6716 20 3.5 20H14.5ZM8.5 6C9.3284 6 10 5.32843 10 4.5C10 3.67157 9.3284 3 8.5 3H3.5C2.6716 3 2 3.67157 2 4.5C2 5.32843 2.6716 6 3.5 6H8.5Z" fill="black" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</button>
						<!--end::Toolbar-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
								<li class="menu-item menu-item-active" aria-haspopup="true">
									<a href="index.html" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
													<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Dashboard</span>
									</a>
								</li>
								<li class="menu-section">
									<h4 class="menu-text">Custom</h4>
									<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
													<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Applications</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Applications</span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Users</span>
													<span class="menu-label">
														<span class="label label-rounded label-primary">6</span>
													</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/apps/user/list-default.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">List - Default</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/apps/user/list-datatable.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">List - Datatable</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/apps/user/list-columns-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">List - Columns 1</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/apps/user/list-columns-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">List - Columns 2</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/apps/user/add-user.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Add User</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/apps/user/edit-user.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Edit User</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Profile</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
															<a href="javascript:;" class="menu-link menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Profile 1</span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu">
																<i class="menu-arrow"></i>
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="custom/apps/profile/profile-1/overview.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Overview</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="custom/apps/profile/profile-1/personal-information.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Personal Information</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="custom/apps/profile/profile-1/account-information.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Account Information</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="custom/apps/profile/profile-1/change-password.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Change Password</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="custom/apps/profile/profile-1/email-settings.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">Email Settings</span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/apps/profile/profile-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Profile 2</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/apps/profile/profile-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Profile 3</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/apps/profile/profile-4.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Profile 4</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="custom/apps/inbox.html" class="menu-link">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">Inbox</span>
													<span class="menu-label">
														<span class="label label-danger label-inline">new</span>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16" />
													<path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Pages</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Pages</span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Login</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/login/login-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Login 1</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/login/login-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Login 2</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
															<a href="javascript:;" class="menu-link menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Login 3</span>
																<span class="menu-label">
																	<span class="label label-inline label-info">Wizard</span>
																</span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu">
																<i class="menu-arrow"></i>
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="custom/pages/login/login-3/signup.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Sign Up</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="custom/pages/login/login-3/signin.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Sign In</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="custom/pages/login/login-3/forgot.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-dot">
																				<span></span>
																			</i>
																			<span class="menu-text">Forgot Password</span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Wizard</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/wizard/wizard-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Wizard 1</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/wizard/wizard-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Wizard 2</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/wizard/wizard-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Wizard 3</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/wizard/wizard-4.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Wizard 4</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/wizard/wizard-5.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Wizard 5</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Pricing Tables</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/pricing/pricing-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Pricing Tables 1</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/pricing/pricing-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Pricing Tables 2</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Invoices</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/invoices/invoice-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Invoice 1</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/invoices/invoice-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Invoice 2</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Error</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/error/error-1.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Error 1</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/error/error-2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Error 2</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/error/error-3.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Error 3</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="custom/pages/error/error-4.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Error 4</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-section">
									<h4 class="menu-text">Layout</h4>
									<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)" />
													<path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Themes</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Themes</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/themes/aside-light.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Light Aside</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/themes/header-dark.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Dark Header</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
													<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Subheaders</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Subheaders</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/subheader/general.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">General</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/subheader/toolbar.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Toolbar</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/subheader/actions.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Actions</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/subheader/crud.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">CRUD</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/subheader/none.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">None</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
													<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">General</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">General</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/general/sidebar.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Sidebar</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/general/expanded-sidebar.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Expanded Sidebar</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/general/fluid-content.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Fluid Content</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/general/minimized-aside.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Minimized Aside</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/general/no-aside.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">No Aside</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/general/empty-page.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Empty Page</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/general/fixed-footer.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Fixed Footer</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="layout/general/no-header-menu.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">No Header Menu</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a target="_blank" href="https://preview.keenthemes.com/keen/demo1/builder.html" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
													<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Builder</span>
									</a>
								</li>
								<li class="menu-section">
									<h4 class="menu-text">features</h4>
									<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
													<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Bootstrap</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Bootstrap</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/bootstrap/typography.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Typography</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/bootstrap/buttons.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Buttons</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/bootstrap/button-group.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Button Group</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/bootstrap/dropdown.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Dropdown</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/bootstrap/navs.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Navs</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/bootstrap/tables.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Tables</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/bootstrap/progress.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Progress</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/bootstrap/modal.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Modal</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/bootstrap/alerts.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Alerts</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/bootstrap/popover.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Popover</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/bootstrap/tooltip.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Tooltip</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Files/Pictures1.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3" />
													<polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19" />
													<polygon fill="#000000" points="11 19 15 14 19 19" />
													<path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Custom</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Custom</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/utilities.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Utilities</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/label.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Labels</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/pulse.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Pulse</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/line-tabs.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Line Tabs</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/advance-navs.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Advance Navs</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/timeline.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Timeline</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/pagination.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Pagination</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/symbol.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Symbol</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/overlay.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Overlay</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/spinners.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Spinners</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/iconbox.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Iconbox</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/callout.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Callout</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/ribbons.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Ribbons</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/custom/accordions.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Accordions</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Forms</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Forms</span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Form Controls</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/controls/base.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Base Inputs</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/controls/input-group.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Input Groups</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/controls/checkbox.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Checkbox</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/controls/radio.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Radio</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/controls/switch.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Switch</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/controls/option.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Mega Options</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Form Widgets</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/bootstrap-datetimepicker.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Datetimepicker</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/bootstrap-datepicker.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Datepicker</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/bootstrap-timepicker.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Timepicker</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/bootstrap-daterangepicker.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Daterangepicker</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/tagify.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Tagify</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/bootstrap-touchspin.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Touchspin</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/bootstrap-maxlength.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Maxlength</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/bootstrap-switch.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Switch</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/bootstrap-multipleselectsplitter.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Multiple Select Splitter</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/bootstrap-select.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Bootstrap Select</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/select2.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Select2</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/typeahead.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Typeahead</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/nouislider.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">noUiSlider</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/form-repeater.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Form Repeater</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/ion-range-slider.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Ion Range Slider</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/input-mask.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Input Masks</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/jquery-mask.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">jQuery Mask</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/autosize.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Autosize</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/clipboard.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Clipboard</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/widgets/recaptcha.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Google reCaptcha</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Form Text Editors</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/editors/tinymce.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">TinyMCE</span>
															</a>
														</li>
														<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
															<a href="javascript:;" class="menu-link menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">CKEditor</span>
																<i class="menu-arrow"></i>
															</a>
															<div class="menu-submenu">
																<i class="menu-arrow"></i>
																<ul class="menu-subnav">
																	<li class="menu-item" aria-haspopup="true">
																		<a href="features/forms/editors/ckeditor-classic.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">CKEditor Classic</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="features/forms/editors/ckeditor-inline.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">CKEditor Inline</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="features/forms/editors/ckeditor-balloon.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">CKEditor Balloon</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="features/forms/editors/ckeditor-balloon-block.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">CKEditor Balloon Block</span>
																		</a>
																	</li>
																	<li class="menu-item" aria-haspopup="true">
																		<a href="features/forms/editors/ckeditor-document.html" class="menu-link">
																			<i class="menu-bullet menu-bullet-line">
																				<span></span>
																			</i>
																			<span class="menu-text">CKEditor Document</span>
																		</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/editors/quill.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Quill Text Editor</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/editors/summernote.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Summernote WYSIWYG</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/editors/bootstrap-markdown.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Markdown Editor</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Form Layouts</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/layouts/default-forms.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Default Forms</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/layouts/multi-column-forms.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Multi Column Forms</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/layouts/action-bars.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Basic Action Bars</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/layouts/sticky-action-bar.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Sticky Action Bar</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Form Validation</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/validation/states.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Validation States</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/validation/form-controls.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Form Controls</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/forms/validation/form-widgets.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Form Widgets</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-left-panel-2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000" />
													<rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">KTDatatable</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">KTDatatable</span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Base</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/base/data-local.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Local Data</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/base/data-json.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">JSON Data</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/base/data-ajax.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Ajax Data</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/base/html-table.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">HTML Table</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/base/local-sort.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Local Sort</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/base/translation.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Translation</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Advanced</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/advanced/record-selection.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Record Selection</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/advanced/row-details.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Row Details</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/advanced/modal.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Modal Examples</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/advanced/column-rendering.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Column Rendering</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/advanced/column-width.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Column Width</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/advanced/vertical.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Vertical Scrolling</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Child Datatables</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/child/data-local.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Local Data</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/child/data-ajax.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Remote Data</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">API</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/api/methods.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">API Methods</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/ktdatatable/api/events.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Events</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-horizontal.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="6" rx="1.5" />
													<rect fill="#000000" x="4" y="13" width="16" height="6" rx="1.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Datatables.net</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Datatables.net</span>
												</span>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Basic</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/basic/basic.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Basic Tables</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/basic/scrollable.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Scrollable Tables</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/basic/headers.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Complex Headers</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/basic/paginations.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Pagination Options</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Advanced</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/advanced/column-rendering.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Column Rendering</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/advanced/multiple-controls.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Multiple Controls</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/advanced/column-visibility.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Column Visibility</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/advanced/row-callback.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Row Callback</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/advanced/row-grouping.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Row Grouping</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/advanced/footer-callback.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Footer Callback</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Data sources</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/data-sources/html.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">HTML</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/data-sources/javascript.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Javascript</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/data-sources/ajax-client-side.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Ajax Client-side</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/data-sources/ajax-server-side.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Ajax Server-side</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Search Options</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/search-options/column-search.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Column Search</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/search-options/advanced-search.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Advanced Search</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Extensions</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/extensions/buttons.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Buttons</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/extensions/colreorder.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">ColReorder</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/extensions/keytable.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">KeyTable</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/extensions/responsive.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Responsive</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/extensions/rowgroup.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">RowGroup</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/extensions/rowreorder.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">RowReorder</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/extensions/scroller.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Scroller</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/datatables/extensions/select.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Select</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Files/Upload.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1" />
													<path d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">File Upload</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item" aria-haspopup="true">
												<a href="features/file-upload/image-input.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Image Input</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/file-upload/dropzonejs.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">DropzoneJS</span>
													<span class="menu-label">
														<span class="label label-danger label-inline">new</span>
													</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/file-upload/uppy.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Uppy</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-arrange.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000" />
													<path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Cards</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Cards</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/cards/general.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">General Cards</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/cards/stacked.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Stacked Cards</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/cards/tabbed.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Tabbed Cards</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/cards/draggable.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Draggable Cards</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/cards/tools.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Cards Tools</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/cards/sticky.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Sticky Cards</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/cards/stretched.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Stretched Cards</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Diagnostics.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" opacity="0.3" x="2" y="3" width="20" height="18" rx="2" />
													<path d="M9.9486833,13.3162278 C9.81256925,13.7245699 9.43043041,14 9,14 L5,14 C4.44771525,14 4,13.5522847 4,13 C4,12.4477153 4.44771525,12 5,12 L8.27924078,12 L10.0513167,6.68377223 C10.367686,5.73466443 11.7274983,5.78688777 11.9701425,6.75746437 L13.8145063,14.1349195 L14.6055728,12.5527864 C14.7749648,12.2140024 15.1212279,12 15.5,12 L19,12 C19.5522847,12 20,12.4477153 20,13 C20,13.5522847 19.5522847,14 19,14 L16.118034,14 L14.3944272,17.4472136 C13.9792313,18.2776054 12.7550291,18.143222 12.5298575,17.2425356 L10.8627389,10.5740611 L9.9486833,13.3162278 Z" fill="#000000" fill-rule="nonzero" />
													<circle fill="#000000" opacity="0.3" cx="19" cy="6" r="1" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Widgets</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Widgets</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/widgets/lists.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Lists</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/widgets/stats.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Stats</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/widgets/charts.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Charts</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/widgets/mixed.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Mixed</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/widgets/tables.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Tables</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/widgets/nav-panels.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Nav Panels</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/widgets/engage.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Engage</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
													<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
													<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
													<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Icons</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item" aria-haspopup="true">
												<a href="features/icons/svg.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">SVG Icons</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/icons/custom-icons.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Custom Icons</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/icons/flaticon.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Flaticon</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/icons/fontawesome5.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Fontawesome 5</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/icons/lineawesome.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Lineawesome</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/icons/socicons.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Socicons</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Select.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18.5,8 C17.1192881,8 16,6.88071187 16,5.5 C16,4.11928813 17.1192881,3 18.5,3 C19.8807119,3 21,4.11928813 21,5.5 C21,6.88071187 19.8807119,8 18.5,8 Z M18.5,21 C17.1192881,21 16,19.8807119 16,18.5 C16,17.1192881 17.1192881,16 18.5,16 C19.8807119,16 21,17.1192881 21,18.5 C21,19.8807119 19.8807119,21 18.5,21 Z M5.5,21 C4.11928813,21 3,19.8807119 3,18.5 C3,17.1192881 4.11928813,16 5.5,16 C6.88071187,16 8,17.1192881 8,18.5 C8,19.8807119 6.88071187,21 5.5,21 Z" fill="#000000" opacity="0.3" />
													<path d="M5.5,8 C4.11928813,8 3,6.88071187 3,5.5 C3,4.11928813 4.11928813,3 5.5,3 C6.88071187,3 8,4.11928813 8,5.5 C8,6.88071187 6.88071187,8 5.5,8 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 C14,5.55228475 13.5522847,6 13,6 L11,6 C10.4477153,6 10,5.55228475 10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,18 L13,18 C13.5522847,18 14,18.4477153 14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 C10,18.4477153 10.4477153,18 11,18 Z M5,10 C5.55228475,10 6,10.4477153 6,11 L6,13 C6,13.5522847 5.55228475,14 5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 C18.4477153,14 18,13.5522847 18,13 L18,11 C18,10.4477153 18.4477153,10 19,10 Z" fill="#000000" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Calendar</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Calendar</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/calendar/basic.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Basic Calendar</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/calendar/list-view.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">List Views</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/calendar/google.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Google Calendar</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/calendar/external-events.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">External Events</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/calendar/background-events.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Background Events</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
													<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
													<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
													<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Charts</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Charts</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/charts/apexcharts.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Apexcharts</span>
												</a>
											</li>
											<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
												<a href="javascript:;" class="menu-link menu-toggle">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">amCharts</span>
													<i class="menu-arrow"></i>
												</a>
												<div class="menu-submenu">
													<i class="menu-arrow"></i>
													<ul class="menu-subnav">
														<li class="menu-item" aria-haspopup="true">
															<a href="features/charts/amcharts/charts.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">amCharts Charts</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/charts/amcharts/stock-charts.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">amCharts Stock Charts</span>
															</a>
														</li>
														<li class="menu-item" aria-haspopup="true">
															<a href="features/charts/amcharts/maps.html" class="menu-link">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">amCharts Maps</span>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/charts/flotcharts.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Flot Charts</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/charts/google-charts.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Google Charts</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Book-open.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000" />
													<path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Maps</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Maps</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/maps/google-maps.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Google Maps</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/maps/leaflet.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Leaflet</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/maps/jqvmap.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">JQVMap</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Mirror.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M13,17.0484323 L13,18 L14,18 C15.1045695,18 16,18.8954305 16,20 L8,20 C8,18.8954305 8.8954305,18 10,18 L11,18 L11,17.0482312 C6.89844817,16.5925472 3.58685702,13.3691811 3.07555009,9.22038742 C3.00799634,8.67224972 3.3975866,8.17313318 3.94572429,8.10557943 C4.49386199,8.03802567 4.99297853,8.42761593 5.06053229,8.97575363 C5.4896663,12.4577884 8.46049164,15.1035129 12.0008191,15.1035129 C15.577644,15.1035129 18.5681939,12.4043008 18.9524872,8.87772126 C19.0123158,8.32868667 19.505897,7.93210686 20.0549316,7.99193546 C20.6039661,8.05176407 21.000546,8.54534521 20.9407173,9.09437981 C20.4824216,13.3000638 17.1471597,16.5885839 13,17.0484323 Z" fill="#000000" fill-rule="nonzero" />
													<path d="M12,14 C8.6862915,14 6,11.3137085 6,8 C6,4.6862915 8.6862915,2 12,2 C15.3137085,2 18,4.6862915 18,8 C18,11.3137085 15.3137085,14 12,14 Z M8.81595773,7.80077353 C8.79067542,7.43921955 8.47708263,7.16661749 8.11552864,7.19189981 C7.75397465,7.21718213 7.4813726,7.53077492 7.50665492,7.89232891 C7.62279197,9.55316612 8.39667037,10.8635466 9.79502238,11.7671393 C10.099435,11.9638458 10.5056723,11.8765328 10.7023788,11.5721203 C10.8990854,11.2677077 10.8117724,10.8614704 10.5073598,10.6647638 C9.4559885,9.98538454 8.90327706,9.04949813 8.81595773,7.80077353 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Miscellaneous</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Miscellaneous</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/kanban-board.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Kanban Board</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/sticky-panels.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Sticky Panels</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/blockui.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Block UI</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/perfect-scrollbar.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Perfect Scrollbar</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/treeview.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Tree View</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/bootstrap-notify.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Bootstrap Notify</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/toastr.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Toastr</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/sweetalert2.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">SweetAlert2</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/dual-listbox.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Dual Listbox</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/session-timeout.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Session Timeout</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/idle-timer.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Idle Timer</span>
												</a>
											</li>
											<li class="menu-item" aria-haspopup="true">
												<a href="features/miscellaneous/cropper.html" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">Cropper</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Header Menu Wrapper-->
							<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Menu-->
								<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
									<!--begin::Header Nav-->
									<ul class="menu-nav">
										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active" data-menu-toggle="click" aria-haspopup="true">
											<a href="javascript:;" class="menu-link menu-toggle">
												<span class="menu-text">Pages</span>
												<i class="menu-arrow"></i>
											</a>
											<div class="menu-submenu menu-submenu-classic menu-submenu-left">
												<ul class="menu-subnav">
													<li class="menu-item menu-item-active" aria-haspopup="true">
														<a href="index.html" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Briefcase.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000" />
																		<path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">My Account</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a href="javascript:;" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
																		<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Task Manager</span>
															<span class="menu-label">
																<span class="label label-success label-rounded">2</span>
															</span>
														</a>
													</li>
													<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
														<a href="javascript:;" class="menu-link menu-toggle">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Code/CMD.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M9,15 L7.5,15 C6.67157288,15 6,15.6715729 6,16.5 C6,17.3284271 6.67157288,18 7.5,18 C8.32842712,18 9,17.3284271 9,16.5 L9,15 Z M9,15 L9,9 L15,9 L15,15 L9,15 Z M15,16.5 C15,17.3284271 15.6715729,18 16.5,18 C17.3284271,18 18,17.3284271 18,16.5 C18,15.6715729 17.3284271,15 16.5,15 L15,15 L15,16.5 Z M16.5,9 C17.3284271,9 18,8.32842712 18,7.5 C18,6.67157288 17.3284271,6 16.5,6 C15.6715729,6 15,6.67157288 15,7.5 L15,9 L16.5,9 Z M9,7.5 C9,6.67157288 8.32842712,6 7.5,6 C6.67157288,6 6,6.67157288 6,7.5 C6,8.32842712 6.67157288,9 7.5,9 L9,9 L9,7.5 Z M11,13 L13,13 L13,11 L11,11 L11,13 Z M13,11 L13,7.5 C13,5.56700338 14.5670034,4 16.5,4 C18.4329966,4 20,5.56700338 20,7.5 C20,9.43299662 18.4329966,11 16.5,11 L13,11 Z M16.5,13 C18.4329966,13 20,14.5670034 20,16.5 C20,18.4329966 18.4329966,20 16.5,20 C14.5670034,20 13,18.4329966 13,16.5 L13,13 L16.5,13 Z M11,16.5 C11,18.4329966 9.43299662,20 7.5,20 C5.56700338,20 4,18.4329966 4,16.5 C4,14.5670034 5.56700338,13 7.5,13 L11,13 L11,16.5 Z M7.5,11 C5.56700338,11 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,4 7.5,4 C9.43299662,4 11,5.56700338 11,7.5 L11,11 L7.5,11 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Team Manager</span>
															<i class="menu-arrow"></i>
														</a>
														<div class="menu-submenu menu-submenu-classic menu-submenu-right">
															<ul class="menu-subnav">
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Add Team Member</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Edit Team Member</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Delete Team Member</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Team Member Reports</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Assign Tasks</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Promote Team Member</span>
																	</a>
																</li>
															</ul>
														</div>
													</li>
													<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
														<a href="#" class="menu-link menu-toggle">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-box.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M22,15 L22,19 C22,20.1045695 21.1045695,21 20,21 L4,21 C2.8954305,21 2,20.1045695 2,19 L2,15 L6.27924078,15 L6.82339262,16.6324555 C7.09562072,17.4491398 7.8598984,18 8.72075922,18 L15.381966,18 C16.1395101,18 16.8320364,17.5719952 17.1708204,16.8944272 L18.118034,15 L22,15 Z" fill="#000000" />
																		<path d="M2.5625,13 L5.92654389,7.01947752 C6.2807805,6.38972356 6.94714834,6 7.66969497,6 L16.330305,6 C17.0528517,6 17.7192195,6.38972356 18.0734561,7.01947752 L21.4375,13 L18.118034,13 C17.3604899,13 16.6679636,13.4280048 16.3291796,14.1055728 L15.381966,16 L8.72075922,16 L8.17660738,14.3675445 C7.90437928,13.5508602 7.1401016,13 6.27924078,13 L2.5625,13 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Projects Manager</span>
															<i class="menu-arrow"></i>
														</a>
														<div class="menu-submenu menu-submenu-classic menu-submenu-right">
															<ul class="menu-subnav">
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Latest Projects</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Ongoing Projects</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Urgent Projects</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Completed Projects</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Dropped Projects</span>
																	</a>
																</li>
															</ul>
														</div>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a href="javascript:;" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Spam.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z M10.5857864,14 L9.17157288,15.4142136 C8.78104858,15.8047379 8.78104858,16.4379028 9.17157288,16.8284271 C9.56209717,17.2189514 10.1952621,17.2189514 10.5857864,16.8284271 L12,15.4142136 L13.4142136,16.8284271 C13.8047379,17.2189514 14.4379028,17.2189514 14.8284271,16.8284271 C15.2189514,16.4379028 15.2189514,15.8047379 14.8284271,15.4142136 L13.4142136,14 L14.8284271,12.5857864 C15.2189514,12.1952621 15.2189514,11.5620972 14.8284271,11.1715729 C14.4379028,10.7810486 13.8047379,10.7810486 13.4142136,11.1715729 L12,12.5857864 L10.5857864,11.1715729 C10.1952621,10.7810486 9.56209717,10.7810486 9.17157288,11.1715729 C8.78104858,11.5620972 8.78104858,12.1952621 9.17157288,12.5857864 L10.5857864,14 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Create New Project</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
										<li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
											<a href="javascript:;" class="menu-link menu-toggle">
												<span class="menu-text">Features</span>
												<i class="menu-arrow"></i>
											</a>
											<div class="menu-submenu menu-submenu-fixed menu-submenu-left" style="width:1000px">
												<div class="menu-subnav">
													<ul class="menu-content">
														<li class="menu-item">
															<h3 class="menu-heading menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Task Reports</span>
																<i class="menu-arrow"></i>
															</h3>
															<ul class="menu-inner">
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Briefcase.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000" />
																					<path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Latest Tasks</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Crown.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M11.2600599,5.81393408 L2,16 L22,16 L12.7399401,5.81393408 C12.3684331,5.40527646 11.7359848,5.37515988 11.3273272,5.7466668 C11.3038503,5.7680094 11.2814025,5.79045722 11.2600599,5.81393408 Z" fill="#000000" opacity="0.3" />
																					<path d="M12.0056789,15.7116802 L20.2805786,6.85290308 C20.6575758,6.44930487 21.2903735,6.42774054 21.6939717,6.8047378 C21.8964274,6.9938498 22.0113578,7.25847607 22.0113578,7.535517 L22.0113578,20 L16.0113578,20 L2,20 L2,7.535517 C2,7.25847607 2.11493033,6.9938498 2.31738608,6.8047378 C2.72098429,6.42774054 3.35378194,6.44930487 3.7307792,6.85290308 L12.0056789,15.7116802 Z" fill="#000000" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Pending Tasks</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Lock-overturning.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3" />
																					<path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Urgent Tasks</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Thumbtack.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M11.6734943,8.3307728 L14.9993074,6.09979492 L14.1213255,5.22181303 C13.7308012,4.83128874 13.7308012,4.19812376 14.1213255,3.80759947 L15.535539,2.39338591 C15.9260633,2.00286161 16.5592283,2.00286161 16.9497526,2.39338591 L22.6066068,8.05024016 C22.9971311,8.44076445 22.9971311,9.07392943 22.6066068,9.46445372 L21.1923933,10.8786673 C20.801869,11.2691916 20.168704,11.2691916 19.7781797,10.8786673 L18.9002333,10.0007208 L16.6692373,13.3265608 C16.9264145,14.2523264 16.9984943,15.2320236 16.8664372,16.2092466 L16.4344698,19.4058049 C16.360509,19.9531149 15.8568695,20.3368403 15.3095595,20.2628795 C15.0925691,20.2335564 14.8912006,20.1338238 14.7363706,19.9789938 L5.02099894,10.2636221 C4.63047465,9.87309784 4.63047465,9.23993286 5.02099894,8.84940857 C5.17582897,8.69457854 5.37719743,8.59484594 5.59418783,8.56552292 L8.79074617,8.13355557 C9.76799113,8.00149544 10.7477104,8.0735815 11.6734943,8.3307728 Z" fill="#000000" />
																					<polygon fill="#000000" opacity="0.3" transform="translate(7.050253, 17.949747) rotate(-315.000000) translate(-7.050253, -17.949747)" points="5.55025253 13.9497475 5.55025253 19.6640332 7.05025253 21.9497475 8.55025253 19.6640332 8.55025253 13.9497475" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Completed Tasks</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<span class="svg-icon menu-icon">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Outgoing-box.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<path d="M22,17 L22,21 C22,22.1045695 21.1045695,23 20,23 L4,23 C2.8954305,23 2,22.1045695 2,21 L2,17 L6.27924078,17 L6.82339262,18.6324555 C7.09562072,19.4491398 7.8598984,20 8.72075922,20 L15.381966,20 C16.1395101,20 16.8320364,19.5719952 17.1708204,18.8944272 L18.118034,17 L22,17 Z" fill="#000000" />
																					<path d="M2.5625,15 L5.92654389,9.01947752 C6.2807805,8.38972356 6.94714834,8 7.66969497,8 L16.330305,8 C17.0528517,8 17.7192195,8.38972356 18.0734561,9.01947752 L21.4375,15 L18.118034,15 C17.3604899,15 16.6679636,15.4280048 16.3291796,16.1055728 L15.381966,18 L8.72075922,18 L8.17660738,16.3675445 C7.90437928,15.5508602 7.1401016,15 6.27924078,15 L2.5625,15 Z" fill="#000000" opacity="0.3" />
																					<path d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508)" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																		<span class="menu-text">Failed Tasks</span>
																	</a>
																</li>
															</ul>
														</li>
														<li class="menu-item">
															<h3 class="menu-heading menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Profit Margins</span>
																<i class="menu-arrow"></i>
															</h3>
															<ul class="menu-inner">
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Overall Profits</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Gross Profits</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Nett Profits</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Year to Date Reports</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Quarterly Profits</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Monthly Profits</span>
																	</a>
																</li>
															</ul>
														</li>
														<li class="menu-item">
															<h3 class="menu-heading menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Staff Management</span>
																<i class="menu-arrow"></i>
															</h3>
															<ul class="menu-inner">
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Top Management</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Project Managers</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Development Staff</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Customer Service</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Sales and Marketing</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Executives</span>
																	</a>
																</li>
															</ul>
														</li>
														<li class="menu-item">
															<h3 class="menu-heading menu-toggle">
																<i class="menu-bullet menu-bullet-dot">
																	<span></span>
																</i>
																<span class="menu-text">Tools</span>
																<i class="menu-arrow"></i>
															</h3>
															<ul class="menu-inner">
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<span class="menu-text">Analytical Reports</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<span class="menu-text">Customer CRM</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<span class="menu-text">Operational Growth</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<span class="menu-text">Social Media Presence</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<span class="menu-text">Files and Directories</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<span class="menu-text">Audit &amp; Logs</span>
																	</a>
																</li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
											<a href="javascript:;" class="menu-link menu-toggle">
												<span class="menu-text">Apps</span>
												<i class="menu-arrow"></i>
											</a>
											<div class="menu-submenu menu-submenu-classic menu-submenu-left">
												<ul class="menu-subnav">
													<li class="menu-item" aria-haspopup="true">
														<a href="javascript:;" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Safe-chat.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3" />
																		<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Reporting</span>
														</a>
													</li>
													<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
														<a href="javascript:;" class="menu-link menu-toggle">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Send.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M3,13.5 L19,12 L3,10.5 L3,3.7732928 C3,3.70255344 3.01501031,3.63261921 3.04403925,3.56811047 C3.15735832,3.3162903 3.45336217,3.20401298 3.70518234,3.31733205 L21.9867539,11.5440392 C22.098181,11.5941815 22.1873901,11.6833905 22.2375323,11.7948177 C22.3508514,12.0466378 22.2385741,12.3426417 21.9867539,12.4559608 L3.70518234,20.6826679 C3.64067359,20.7116969 3.57073936,20.7267072 3.5,20.7267072 C3.22385763,20.7267072 3,20.5028496 3,20.2267072 L3,13.5 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Social Presence</span>
															<i class="menu-arrow"></i>
														</a>
														<div class="menu-submenu menu-submenu-classic menu-submenu-right">
															<ul class="menu-subnav">
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Reached Users</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">SEO Ranking</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">User Dropout Points</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Market Segments</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-dot">
																			<span></span>
																		</i>
																		<span class="menu-text">Opportunity Growth</span>
																	</a>
																</li>
															</ul>
														</div>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a href="javascript:;" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-at.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Sales &amp; Marketing</span>
														</a>
													</li>
													<li class="menu-item" aria-haspopup="true">
														<a href="javascript:;" class="menu-link">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-locked.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5" />
																		<path d="M16,10 L16,9.5 C16,8.11928813 14.8807119,7 13.5,7 C12.1192881,7 11,8.11928813 11,9.5 L11,10 C10.4477153,10 10,10.4477153 10,11 L10,14 C10,14.5522847 10.4477153,15 11,15 L16,15 C16.5522847,15 17,14.5522847 17,14 L17,11 C17,10.4477153 16.5522847,10 16,10 Z M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M13.5,8 L13.5,8 C14.3284271,8 15,8.67157288 15,9.5 L15,10 L12,10 L12,9.5 C12,8.67157288 12.6715729,8 13.5,8 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Campaigns</span>
															<span class="menu-label">
																<span class="label label-success label-rounded">3</span>
															</span>
														</a>
													</li>
													<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
														<a href="javascript:;" class="menu-link menu-toggle">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																		<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Deployment Center</span>
															<i class="menu-arrow"></i>
														</a>
														<div class="menu-submenu menu-submenu-classic menu-submenu-right">
															<ul class="menu-subnav">
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Merge Branch</span>
																		<span class="menu-label">
																			<span class="label label-danger label-rounded">3</span>
																		</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Version Controls</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">Database Manager</span>
																	</a>
																</li>
																<li class="menu-item" aria-haspopup="true">
																	<a href="javascript:;" class="menu-link">
																		<i class="menu-bullet menu-bullet-line">
																			<span></span>
																		</i>
																		<span class="menu-text">System Settings</span>
																	</a>
																</li>
															</ul>
														</div>
													</li>
												</ul>
											</div>
										</li>
									</ul>
									<!--end::Header Nav-->
								</div>
								<!--end::Header Menu-->
							</div>
							<!--end::Header Menu Wrapper-->
							<!--begin::Topbar-->
							<div class="topbar">
								<!--begin::Search-->
								<div class="dropdown mr-1" id="kt_quick_search_toggle">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean btn-lg btn-dropdown">
											<span class="svg-icon svg-icon-xl svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
										<div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
											<!--begin:Form-->
											<form method="get" class="quick-search-form">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</span>
													</div>
													<input type="text" class="form-control" placeholder="Search..." />
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
														</span>
													</div>
												</div>
											</form>
											<!--end::Form-->
											<!--begin::Scroll-->
											<div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
											<!--end::Scroll-->
										</div>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Search-->
								<!--begin::Notifications-->
								<div class="dropdown mr-1">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean btn-dropdown btn-lg pulse pulse-primary">
											<span class="svg-icon svg-icon-xl svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
														<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
											<span class="pulse-ring"></span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
										<form>
											<!--begin::Header-->
											<div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-3.jpg)">
												<!--begin::Title-->
												<h4 class="d-flex flex-center rounded-top">
													<span class="text-white">Message Center</span>
													<span class="btn btn-success btn-sm font-weight-bold ml-2">25</span>
												</h4>
												<!--end::Title-->
												<!--begin::Tabs-->
												<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8 font-size-lg" role="tablist">
													<li class="nav-item">
														<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Reminders</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>
													</li>
												</ul>
												<!--end::Tabs-->
											</div>
											<!--end::Header-->
											<!--begin::Content-->
											<div class="tab-content">
												<!--begin::Tabpane-->
												<div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
													<!--begin::Scroll-->
													<div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-35 flex-shrink-0 mr-3">
																<img alt="Pic" src="assets/media/users/150-5.jpg" />
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-wrap flex-row-fluid">
																<!--begin::Text-->
																<div class="d-flex flex-column pr-5 flex-grow-1">
																	<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Marcus Smart</a>
																	<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
																</div>
																<!--end::Text-->
																<!--begin::Section-->
																<div class="d-flex align-items-center py-2">
																	<!--begin::Label-->
																	<span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>
																	<!--end::Label-->
																	<!--begin::Btn-->
																	<a href="#" class="btn btn-icon btn-light btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-success">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Btn-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
																<span class="symbol-label font-weight-bolder font-size-lg">AH</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-wrap flex-row-fluid">
																<!--begin::Text-->
																<div class="d-flex flex-column pr-5 flex-grow-1">
																	<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Andreas Hawks</a>
																	<span class="text-muted font-weight-bold">Python Developer</span>
																</div>
																<!--end::Text-->
																<!--begin::Section-->
																<div class="d-flex align-items-center py-2">
																	<!--begin::Label-->
																	<span class="text-success font-weight-bolder font-size-sm pr-6">+23%</span>
																	<!--end::Label-->
																	<!--begin::Btn-->
																	<a href="#" class="btn btn-icon btn-light btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-success">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Btn-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
																<span class="symbol-label font-weight-bolder font-size-lg">SC</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-wrap flex-row-fluid">
																<!--begin::Text-->
																<div class="d-flex flex-column pr-5 flex-grow-1">
																	<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Sarah Connor</a>
																	<span class="text-muted font-weight-bold">HTML, CSS. jQuery</span>
																</div>
																<!--end::Text-->
																<!--begin::Section-->
																<div class="d-flex align-items-center py-2">
																	<!--begin::Label-->
																	<span class="text-danger font-weight-bolder font-size-sm pr-6">-34%</span>
																	<!--end::Label-->
																	<!--begin::Btn-->
																	<a href="#" class="btn btn-icon btn-light btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-success">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Btn-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-35 flex-shrink-0 mr-3">
																<img alt="Pic" src="assets/media/users/150-7.jpg" />
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-wrap flex-row-fluid">
																<!--begin::Text-->
																<div class="d-flex flex-column pr-5 flex-grow-1">
																	<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Amanda Harden</a>
																	<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
																</div>
																<!--end::Text-->
																<!--begin::Section-->
																<div class="d-flex align-items-center py-2">
																	<!--begin::Label-->
																	<span class="text-success font-weight-bolder font-size-sm pr-6">+72%</span>
																	<!--end::Label-->
																	<!--begin::Btn-->
																	<a href="#" class="btn btn-icon btn-light btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-success">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Btn-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
																<span class="symbol-label font-weight-bolder font-size-lg">SR</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-wrap flex-row-fluid">
																<!--begin::Text-->
																<div class="d-flex flex-column pr-5 flex-grow-1">
																	<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Sean Robbins</a>
																	<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
																</div>
																<!--end::Text-->
																<!--begin::Section-->
																<div class="d-flex align-items-center py-2">
																	<!--begin::Label-->
																	<span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>
																	<!--end::Label-->
																	<!--begin::Btn-->
																	<a href="#" class="btn btn-icon btn-light btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-success">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Btn-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
																<span class="symbol-label font-weight-bolder font-size-lg">SC</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-wrap flex-row-fluid">
																<!--begin::Text-->
																<div class="d-flex flex-column pr-5 flex-grow-1">
																	<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Ana Stone</a>
																	<span class="text-muted font-weight-bold">Figma, PSD</span>
																</div>
																<!--end::Text-->
																<!--begin::Section-->
																<div class="d-flex align-items-center py-2">
																	<!--begin::Label-->
																	<span class="text-info font-weight-bolder font-size-sm pr-6">+34%</span>
																	<!--end::Label-->
																	<!--begin::Btn-->
																	<a href="#" class="btn btn-icon btn-light btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-success">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Btn-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
																<span class="symbol-label font-weight-bolder font-size-lg">JT</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Content-->
															<div class="d-flex flex-wrap flex-row-fluid">
																<!--begin::Text-->
																<div class="d-flex flex-column pr-5 flex-grow-1">
																	<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Jason Tatum</a>
																	<span class="text-muted font-weight-bold">ASP.NET Developer</span>
																</div>
																<!--end::Text-->
																<!--begin::Section-->
																<div class="d-flex align-items-center py-2">
																	<!--begin::Label-->
																	<span class="text-success font-weight-bolder font-size-sm pr-6">+139%</span>
																	<!--end::Label-->
																	<!--begin::Btn-->
																	<a href="#" class="btn btn-icon btn-light btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-success">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24" />
																					<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Btn-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Scroll-->
													<!--begin::Action-->
													<div class="d-flex flex-center pt-7">
														<a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
													</div>
													<!--end::Action-->
												</div>
												<!--end::Tabpane-->
												<!--begin::Tabpane-->
												<div class="tab-pane p-8" id="topbar_notifications_events" role="tabpanel">
													<!--begin::Scroll-->
													<div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-primary mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-primary">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Color-profile.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<circle fill="#000000" cx="12" cy="9" r="5" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Project Launch</a>
																<span class="text-muted">Project campaign planning</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-warning mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-warning">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																				<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Report Generation</a>
																<span class="text-muted">Annual report generation</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-success mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-success">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Share.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M10.9,2 C11.4522847,2 11.9,2.44771525 11.9,3 C11.9,3.55228475 11.4522847,4 10.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,16 C20,15.4477153 20.4477153,15 21,15 C21.5522847,15 22,15.4477153 22,16 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L10.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M24.0690576,13.8973499 C24.0690576,13.1346331 24.2324969,10.1246259 21.8580869,7.73659596 C20.2600137,6.12944276 17.8683518,5.85068794 15.0081639,5.72356847 L15.0081639,1.83791555 C15.0081639,1.42370199 14.6723775,1.08791555 14.2581639,1.08791555 C14.0718537,1.08791555 13.892213,1.15726043 13.7542266,1.28244533 L7.24606818,7.18681951 C6.93929045,7.46513642 6.9162184,7.93944934 7.1945353,8.24622707 C7.20914339,8.26232899 7.22444472,8.27778811 7.24039592,8.29256062 L13.7485543,14.3198102 C14.0524605,14.6012598 14.5269852,14.5830551 14.8084348,14.2791489 C14.9368329,14.140506 15.0081639,13.9585047 15.0081639,13.7695393 L15.0081639,9.90761477 C16.8241562,9.95755456 18.1177196,10.0730665 19.2929978,10.4469645 C20.9778605,10.9829796 22.2816185,12.4994368 23.2042718,14.996336 L23.2043032,14.9963244 C23.313119,15.2908036 23.5938372,15.4863432 23.9077781,15.4863432 L24.0735976,15.4863432 C24.0735976,15.0278051 24.0690576,14.3014082 24.0690576,13.8973499 Z" fill="#000000" fill-rule="nonzero" transform="translate(15.536799, 8.287129) scale(-1, 1) translate(-15.536799, -8.287129)" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Smart App</a>
																<span class="text-muted">Project Managemnt &amp; Design</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-danger mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-danger">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
																				<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Volume Service App</a>
																<span class="text-muted">Analytics &amp; Requirement Study</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-info mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-info">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																				<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
																				<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Reportio App</a>
																<span class="text-muted">Reporting Dashboard App Planning</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-primary mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-primary">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
																				<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Expo Loop</a>
																<span class="text-muted">System Analytics &amp; Development</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-6">
															<!--begin::Symbol-->
															<div class="symbol symbol-40 symbol-light-info mr-5">
																<span class="symbol-label">
																	<span class="svg-icon svg-icon-lg svg-icon-info">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)" />
																				<path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Text-->
															<div class="d-flex flex-column font-weight-bold">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Klup App</a>
																<span class="text-muted">App Design &amp; Development</span>
															</div>
															<!--end::Text-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Tabpane-->
												<!--begin::Tabpane-->
												<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
													<!--begin::Nav-->
													<div class="d-flex flex-center font-weight-bold text-center text-muted min-h-250px">All caught up!
													<br />No new messages.</div>
													<!--end::Nav-->
												</div>
												<!--end::Tabpane-->
											</div>
											<!--end::Content-->
										</form>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Notifications-->
								<!--begin::Quick Actions-->
								<div class="dropdown mr-1">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean btn-dropdown btn-lg">
											<span class="svg-icon svg-icon-xl svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
														<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
														<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
														<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
										<!--begin:Header-->
										<div class="d-flex flex-column flex-center py-10 rounded-to border-bottom">
											<h4 class="text-dark font-weight-bold">Quick Actions</h4>
											<span class="btn btn-primary btn-sm font-weight-bold font-size-sm mt-2">23 new tasks</span>
										</div>
										<!--end:Header-->
										<!--begin:Nav-->
										<div class="row row-paddingless">
											<!--begin:Item-->
											<div class="col-6">
												<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
													<span class="svg-icon svg-icon-3x svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Sale2.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<polygon fill="#000000" opacity="0.3" points="12 20.0218549 8.47346039 21.7286168 6.86905972 18.1543453 3.07048824 17.1949849 4.13894342 13.4256452 1.84573388 10.2490577 5.08710286 8.04836581 5.3722735 4.14091196 9.2698837 4.53859595 12 1.72861679 14.7301163 4.53859595 18.6277265 4.14091196 18.9128971 8.04836581 22.1542661 10.2490577 19.8610566 13.4256452 20.9295118 17.1949849 17.1309403 18.1543453 15.5265396 21.7286168" />
																<polygon fill="#000000" points="14.0890818 8.60255815 8.36079737 14.7014391 9.70868621 16.049328 15.4369707 9.950447" />
																<path d="M10.8543431,9.1753866 C10.8543431,10.1252593 10.085524,10.8938719 9.13585777,10.8938719 C8.18793881,10.8938719 7.41737243,10.1252593 7.41737243,9.1753866 C7.41737243,8.22551387 8.18793881,7.45690126 9.13585777,7.45690126 C10.085524,7.45690126 10.8543431,8.22551387 10.8543431,9.1753866" fill="#000000" opacity="0.3" />
																<path d="M14.8641422,16.6221564 C13.9162233,16.6221564 13.1456569,15.8535438 13.1456569,14.9036711 C13.1456569,13.9520555 13.9162233,13.1851857 14.8641422,13.1851857 C15.8138085,13.1851857 16.5826276,13.9520555 16.5826276,14.9036711 C16.5826276,15.8535438 15.8138085,16.6221564 14.8641422,16.6221564 Z" fill="#000000" opacity="0.3" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Accounting</span>
													<span class="d-block text-dark-50 font-size-lg">eCommerce</span>
												</a>
											</div>
											<!--end:Item-->
											<!--begin:Item-->
											<div class="col-6">
												<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-bottom">
													<span class="svg-icon svg-icon-3x svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
																<circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Management</span>
													<span class="d-block text-dark-50 font-size-lg">Company Reports</span>
												</a>
											</div>
											<!--end:Item-->
											<!--begin:Item-->
											<div class="col-6">
												<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right">
													<span class="svg-icon svg-icon-3x svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Projects</span>
													<span class="d-block text-dark-50 font-size-lg">Completed Tasks</span>
												</a>
											</div>
											<!--end:Item-->
											<!--begin:Item-->
											<div class="col-6">
												<a href="#" class="d-block py-10 px-5 text-center bg-hover-light">
													<span class="svg-icon svg-icon-3x svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Members</span>
													<span class="d-block text-dark-50 font-size-lg">Latest joinings</span>
												</a>
											</div>
											<!--end:Item-->
										</div>
										<!--end:Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Quick Actions-->
								<!--begin::Quick panel-->
								<div class="topbar-item mr-1">
									<div class="btn btn-icon btn-clean btn-lg" id="kt_quick_panel_toggle">
										<span class="svg-icon svg-icon-xl svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
													<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
								</div>
								<!--end::Quick panel-->
								<!--begin::Chat-->
								<div class="topbar-item">
									<div class="btn btn-icon btn-clean btn-lg mr-1" data-toggle="modal" data-target="#kt_chat_modal">
										<span class="svg-icon svg-icon-xl svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat6.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M14.4862 18L12.7975 21.0566C12.5304 21.54 11.922 21.7153 11.4386 21.4483C11.2977 21.3704 11.1777 21.2597 11.0887 21.1255L9.01653 18H5C3.34315 18 2 16.6569 2 15V6C2 4.34315 3.34315 3 5 3H19C20.6569 3 22 4.34315 22 6V15C22 16.6569 20.6569 18 19 18H14.4862Z" fill="black" />
													<path fill-rule="evenodd" clip-rule="evenodd" d="M6 7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H6C5.44772 9 5 8.55228 5 8C5 7.44772 5.44772 7 6 7ZM6 11H11C11.5523 11 12 11.4477 12 12C12 12.5523 11.5523 13 11 13H6C5.44772 13 5 12.5523 5 12C5 11.4477 5.44772 11 6 11Z" fill="black" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
								</div>
								<!--end::Chat-->
								<!--begin::Languages-->
								<div class="dropdown mr-1">
									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-clean btn-dropdown btn-lg">
											<img class="h-20px w-20px rounded-sm" src="assets/media/svg/flags/226-united-states.svg" alt="" />
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
										<!--begin::Nav-->
										<ul class="navi navi-hover py-4">
											<!--begin::Item-->
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="assets/media/svg/flags/226-united-states.svg" alt="" />
													</span>
													<span class="navi-text">English</span>
												</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="navi-item active">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="assets/media/svg/flags/128-spain.svg" alt="" />
													</span>
													<span class="navi-text">Spanish</span>
												</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="assets/media/svg/flags/162-germany.svg" alt="" />
													</span>
													<span class="navi-text">German</span>
												</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="assets/media/svg/flags/063-japan.svg" alt="" />
													</span>
													<span class="navi-text">Japanese</span>
												</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="assets/media/svg/flags/195-france.svg" alt="" />
													</span>
													<span class="navi-text">French</span>
												</a>
											</li>
											<!--end::Item-->
										</ul>
										<!--end::Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Languages-->
								<!--begin::User-->
								<div class="topbar-item ml-4">
									<div class="btn btn-icon btn-light-primary h-40px w-40px p-0" id="kt_quick_user_toggle">
										<img src="assets/media/svg/avatars/004-boy-1.svg" class="h-30px align-self-end" alt="" />
									</div>
									<!--
      <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
       <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                      <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                      <span class="symbol symbol-35 symbol-light-success">
                          <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                      </span>
                  </div>
      -->
								</div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Dashboard</h5>
										<!--end::Page Title-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center flex-wrap">
									<!--begin::Daterange-->
									<a href="#" class="btn btn-fixed-height btn-bg-white btn-text-dark-50 btn-hover-text-primary btn-icon-primary font-weight-bolder font-size-sm px-5 my-1 mr-3" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="top">
										<span class="opacity-60 font-weight-bolder mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
										<span class="font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug 16</span>
									</a>
									<!--end::Daterange-->
									<!--begin::Dropdown-->
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="top">
										<a href="#" class="btn btn-fixed-height btn-bg-white btn-text-dark-50 btn-hover-text-primary btn-icon-primary font-weight-bolder font-size-sm px-5 my-1 mr-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-md">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>Add Member</a>
										<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
											<!--begin::Navigation-->
											<ul class="navi navi-hover">
												<li class="navi-header pb-1">
													<span class="text-primary text-uppercase font-weight-bolder font-size-sm">Add new:</span>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-shopping-cart-1"></i>
														</span>
														<span class="navi-text">Order</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-calendar-8"></i>
														</span>
														<span class="navi-text">Event</span>
														<span class="navi-link-badge">
															<span class="label label-light-danger label-inline font-weight-bold">new</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-graph-1"></i>
														</span>
														<span class="navi-text">Report</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-rocket-1"></i>
														</span>
														<span class="navi-text">Post</span>
														<span class="navi-link-badge">
															<span class="label label-light-success label-rounded font-weight-bolder">5</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-writing"></i>
														</span>
														<span class="navi-text">File</span>
													</a>
												</li>
											</ul>
											<!--end::Navigation-->
										</div>
									</div>
									<!--end::Dropdown-->
									<!--begin::Dropdown-->
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="top">
										<a href="#" class="btn btn-fixed-height btn-primary font-weight-bolder font-size-sm px-5 my-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-md">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
													<rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>New Report</a>
										<div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
											<!--begin::Navigation-->
											<ul class="navi navi-hover">
												<li class="navi-header font-weight-bold py-4">
													<span class="font-size-lg">Choose Option:</span>
													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
												</li>
												<li class="navi-separator mb-3 opacity-70"></li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-primary">Orders</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-danger">Reports</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-warning">Tasks</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-success">Events</span>
														</span>
													</a>
												</li>
												<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-dark">Members</span>
														</span>
													</a>
												</li>
												<li class="navi-separator mt-3 opacity-70"></li>
												<li class="navi-footer py-4">
													<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
													<i class="ki ki-plus icon-sm"></i>Create</a>
												</li>
											</ul>
											<!--end::Navigation-->
										</div>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-lg-4">
										<!--begin::Stats Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-6">
												<h3 class="card-title">
													<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Weekly Sales</span>
												</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-icon-primary btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1">
																		<rect x="14" y="9" width="6" height="6" rx="3" fill="black" />
																		<rect x="3" y="9" width="6" height="6" rx="3" fill="black" fill-opacity="0.7" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover py-5">
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																						<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Member</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																						<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																						<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Contact</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Time-schedule.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000" />
																						<path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Event</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Git3.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M7,11 L15,11 C16.1045695,11 17,10.1045695 17,9 L17,8 L19,8 L19,9 C19,11.209139 17.209139,13 15,13 L7,13 L7,15 C7,15.5522847 6.55228475,16 6,16 C5.44771525,16 5,15.5522847 5,15 L5,9 C5,8.44771525 5.44771525,8 6,8 C6.55228475,8 7,8.44771525 7,9 L7,11 Z" fill="#000000" opacity="0.3" />
																						<path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
																						<path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
																						<path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Task</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Settings4.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																						<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Settings</span>
																	</a>
																</li>
																<li class="navi-separator my-3"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																						<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																						<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Help</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Safe-chat.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3" />
																						<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Privacy</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body d-flex align-items-center justify-content-between pt-7 flex-wrap">
												<!--begin::label-->
												<span class="font-weight-bolder display5 text-dark-75 py-4 pl-5 pr-5">
												<span class="font-weight-normal font-size-h6 text-muted pr-1">$</span>64M</span>
												<!--end::label-->
												<!--begin::Chart-->
												<div class="progress-vertical w-200px h-125px">
													<div class="progress bg-light-primary" data-toggle="tooltip" title="30%">
														<div class="progress-bar bg-primary" role="progressbar" style="height: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="progress bg-light-primary" data-toggle="tooltip" title="80%">
														<div class="progress-bar bg-primary" role="progressbar" style="height: 80%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="progress bg-light-primary" data-toggle="tooltip" title="50%">
														<div class="progress-bar bg-primary" role="progressbar" style="height: 50%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="progress bg-light-primary" data-toggle="tooltip" title="15%">
														<div class="progress-bar bg-primary" role="progressbar" style="height: 15%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="progress bg-light-primary" data-toggle="tooltip" title="30%">
														<div class="progress-bar bg-primary" role="progressbar" style="height: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<div class="progress bg-light-primary" data-toggle="tooltip" title="70%">
														<div class="progress-bar bg-primary" role="progressbar" style="height: 70%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<!--end::Chart-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 1-->
									</div>
									<div class="col-lg-4">
										<!--begin::Stats Widget 2-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-6">
												<h3 class="card-title">
													<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Technologies</span>
												</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-icon-primary btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1">
																		<rect x="14" y="9" width="6" height="6" rx="3" fill="black" />
																		<rect x="3" y="9" width="6" height="6" rx="3" fill="black" fill-opacity="0.7" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover py-5">
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																						<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Member</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																						<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																						<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Contact</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Time-schedule.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000" />
																						<path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Event</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Git3.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M7,11 L15,11 C16.1045695,11 17,10.1045695 17,9 L17,8 L19,8 L19,9 C19,11.209139 17.209139,13 15,13 L7,13 L7,15 C7,15.5522847 6.55228475,16 6,16 C5.44771525,16 5,15.5522847 5,15 L5,9 C5,8.44771525 5.44771525,8 6,8 C6.55228475,8 7,8.44771525 7,9 L7,11 Z" fill="#000000" opacity="0.3" />
																						<path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
																						<path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
																						<path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Task</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Settings4.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																						<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Settings</span>
																	</a>
																</li>
																<li class="navi-separator my-3"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																						<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																						<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Help</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Safe-chat.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3" />
																						<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Privacy</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body d-flex align-items-center justify-content-between pt-7 flex-wrap">
												<!--begin::Label-->
												<span class="font-weight-bolder display5 text-dark-75 pl-5 pr-10">9.3M</span>
												<!--end::Label-->
												<!--begin::Visuals-->
												<div class="d-flex align-items-center justify-content-between">
													<!--begin::legends-->
													<div class="d-flex flex-column mr-4">
														<!--begin::legend-->
														<div class="legend d-flex align-items-center py-1">
															<span class="label label-dark-50 label-dot mr-2"></span>
															<span class="font-weight-bolder font-size-lg text-muted">HTML</span>
														</div>
														<!--end::legend-->
														<!--begin::legend-->
														<div class="legend d-flex align-items-center py-1">
															<span class="label label-dark-75 label-dot mr-2"></span>
															<span class="font-weight-bolder font-size-lg text-muted">CSS</span>
														</div>
														<!--end::legend-->
														<!--begin::legend-->
														<div class="legend d-flex align-items-center py-1">
															<span class="label label-dot label-primary mr-2"></span>
															<span class="font-weight-bolder font-size-lg text-muted">Angular</span>
														</div>
														<!--end::legend-->
													</div>
													<!--end::legends-->
													<!--begin::Chart-->
													<div class="d-flex flex-center position-relative">
														<div class="font-weight-bolder font-size-h5 text-muted position-absolute">8,345</div>
														<canvas id="kt_stats_widget_2_chart" style="height: 110px; width: 110px;"></canvas>
													</div>
													<!--end::Chart-->
												</div>
												<!--end::Visuals-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 2-->
									</div>
									<div class="col-lg-4">
										<!--begin::Stats Widget 3-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-6">
												<h3 class="card-title">
													<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Total Orders</span>
												</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-icon-primary btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1">
																		<rect x="14" y="9" width="6" height="6" rx="3" fill="black" />
																		<rect x="3" y="9" width="6" height="6" rx="3" fill="black" fill-opacity="0.7" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover py-5">
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																						<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Member</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																						<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																						<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Contact</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Time-schedule.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000" />
																						<path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Event</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Git3.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M7,11 L15,11 C16.1045695,11 17,10.1045695 17,9 L17,8 L19,8 L19,9 C19,11.209139 17.209139,13 15,13 L7,13 L7,15 C7,15.5522847 6.55228475,16 6,16 C5.44771525,16 5,15.5522847 5,15 L5,9 C5,8.44771525 5.44771525,8 6,8 C6.55228475,8 7,8.44771525 7,9 L7,11 Z" fill="#000000" opacity="0.3" />
																						<path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
																						<path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
																						<path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Task</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Settings4.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																						<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Settings</span>
																	</a>
																</li>
																<li class="navi-separator my-3"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																						<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																						<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Help</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Safe-chat.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3" />
																						<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Privacy</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body d-flex align-items-center justify-content-between pt-7 flex-wrap">
												<!--begin::label-->
												<span class="font-weight-bolder display5 text-dark-75 pl-5 pr-10">17M</span>
												<!--end::label-->
												<!--begin::Chart-->
												<div id="kt_stats_widget_3_chart" class="w-200px"></div>
												<!--end::Chart-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Stats Widget 3-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-lg-4">
										<!--begin::Mixed Widget 2-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-6">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Top Products</span>
													<span class="text-muted mt-3 font-weight-bold font-size-lg">240,000 Total Sales</span>
												</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-icon-primary btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1">
																		<rect x="14" y="9" width="6" height="6" rx="3" fill="black" />
																		<rect x="3" y="9" width="6" height="6" rx="3" fill="black" fill-opacity="0.7" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover py-5">
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																						<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Member</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																						<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																						<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Contact</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Time-schedule.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000" />
																						<path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Event</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Git3.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M7,11 L15,11 C16.1045695,11 17,10.1045695 17,9 L17,8 L19,8 L19,9 C19,11.209139 17.209139,13 15,13 L7,13 L7,15 C7,15.5522847 6.55228475,16 6,16 C5.44771525,16 5,15.5522847 5,15 L5,9 C5,8.44771525 5.44771525,8 6,8 C6.55228475,8 7,8.44771525 7,9 L7,11 Z" fill="#000000" opacity="0.3" />
																						<path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
																						<path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
																						<path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Task</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Settings4.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																						<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Settings</span>
																	</a>
																</li>
																<li class="navi-separator my-3"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																						<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																						<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Help</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Safe-chat.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3" />
																						<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Privacy</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-6">
												<!--begin::Nav-->
												<ul class="nav nav-pills nav-fill flex-nowrap">
													<!--begin::Nav Item-->
													<li class="nav-item w-90px">
														<a class="nav-link active d-flex flex-column shadow-sm h-80px" data-toggle="tab" href="#kt_tab_mixed_2_1">
															<span class="nav-icon">
																<span class="svg-icon">
																	<span class="svg-icon svg-icon-xxl">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
																				<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
																				<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
																				<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</span>
															<span class="nav-text pt-3 font-weight-bold">Settings</span>
														</a>
													</li>
													<!--begin::Nav Item-->
													<!--end::Nav Item-->
													<li class="nav-item w-90px mx-5">
														<a class="nav-link d-flex flex-column shadow-sm h-80px" data-toggle="tab" href="#kt_tab_mixed_2_2">
															<span class="nav-icon">
																<span class="svg-icon">
																	<span class="svg-icon svg-icon-xxl">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																				<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</span>
															<span class="nav-text pt-3 font-weight-bold">Code</span>
														</a>
													</li>
													<!--begin::Nav Item-->
													<!--end::Nav Item-->
													<li class="nav-item w-90px">
														<a class="nav-link d-flex flex-column shadow-sm h-80px" data-toggle="tab" href="#kt_tab_mixed_2_3">
															<span class="nav-icon">
																<span class="svg-icon">
																	<span class="svg-icon svg-icon-xxl">
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
																				<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
															</span>
															<span class="nav-text pt-3 font-weight-bold">Design</span>
														</a>
													</li>
													<!--end::Nav Item-->
												</ul>
												<!--end::Nav-->
												<!--begin::Tab Content-->
												<div class="tab-content mt-9" id="myTabMixed2">
													<!--begin::Tab Pane-->
													<div class="tab-pane fade active show" id="kt_tab_mixed_2_1" role="tabpanel" aria-labelledby="kt_tab_mixed_2_1">
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between mb-6">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Top Authors</a>
																<span class="text-muted font-weight-bold">Successful Fellas</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">65%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between mb-6">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Popular Authors</a>
																<span class="text-muted font-weight-bold">Most Successful</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">83%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between mb-6">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">New Users</a>
																<span class="text-muted font-weight-bold">Awesome Users</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">47%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-info" role="progressbar" style="width: 47%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Active Customers</a>
																<span class="text-muted font-weight-bold">Best Customers</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">71%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Tab Pane-->
													<!--begin::Tab Pane-->
													<div class="tab-pane fade" id="kt_tab_mixed_2_2" role="tabpanel" aria-labelledby="kt_tab_mixed_2_2">
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between mb-6">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Popular Authors</a>
																<span class="text-muted font-weight-bold">Most Successful</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">83%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between mb-6">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">New Users</a>
																<span class="text-muted font-weight-bold">Awesome Users</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">47%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-info" role="progressbar" style="width: 47%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between mb-6">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Top Authors</a>
																<span class="text-muted font-weight-bold">Successful Fellas</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">65%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Active Customers</a>
																<span class="text-muted font-weight-bold">Best Customers</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">71%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Tab Pane-->
													<!--begin::Tab Pane-->
													<div class="tab-pane fade" id="kt_tab_mixed_2_3" role="tabpanel" aria-labelledby="kt_tab_mixed_2_3">
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between mb-6">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">New Users</a>
																<span class="text-muted font-weight-bold">Awesome Users</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">47%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-info" role="progressbar" style="width: 47%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between mb-6">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Active Customers</a>
																<span class="text-muted font-weight-bold">Best Customers</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">71%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between mb-6">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Top Authors</a>
																<span class="text-muted font-weight-bold">Successful Fellas</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">65%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center justify-content-between">
															<!--begin::Text-->
															<div class="d-flex flex-column">
																<a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Popular Authors</a>
																<span class="text-muted font-weight-bold">Most Successful</span>
															</div>
															<!--end::Text-->
															<!--begin::Progress-->
															<div class="d-flex align-items-center">
																<span class="text-muted mr-3 font-size-sm font-weight-bolder">83%</span>
																<div class="progress progress-xs min-w-65px h-5px">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
															<!--end::Progress-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Tab Pane-->
												</div>
												<!--end::Tab Content-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 2-->
									</div>
									<div class="col-lg-8">
										<!--begin::Tables Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-7">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Active Companies</span>
													<span class="text-muted mt-3 font-weight-bold font-size-lg">49 Acual Tasks</span>
												</h3>
												<div class="card-toolbar">
													<ul class="nav nav-pills nav-pills-sm nav-dark">
														<li class="nav-item ml-0">
															<a class="nav-link py-2 px-4 font-weight-bolder font-size-sm" data-toggle="tab" href="#kt_tab_table_1_1">Pending</a>
														</li>
														<li class="nav-item ml-0">
															<a class="nav-link py-2 px-4 font-weight-bolder font-size-sm" data-toggle="tab" href="#kt_tab_table_1_2">Inactive</a>
														</li>
														<li class="nav-item">
															<a class="nav-link py-2 px-4 active font-weight-bolder font-size-sm" data-toggle="tab" href="#kt_tab_table_1_3">Active</a>
														</li>
													</ul>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-1 pb-4">
												<div class="tab-content mt-5" id="myTabTable1">
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_tab_table_1_1" role="tabpanel" aria-labelledby="kt_tab_table_1_1">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Python Inc.</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$120,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">AngularJS, C#</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-success label-inline">Approved</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Beats Audio</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$28,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">VueJS, Ruby</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-primary label-inline">Success</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pt-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sass Technologies</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$970,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-danger label-inline">Rejected</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0 text-left">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">BP Industries</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$3,400,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-info label-inline">Approved</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Automatica</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$700,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">Laravel Keen</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-warning label-inline">In Progress</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Tablet-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_tab_table_1_2" role="tabpanel" aria-labelledby="kt_tab_table_1_2">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Automatica</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$700,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">Laravel Keen</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-warning label-inline">In Progress</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Python Inc.</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$120,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">AngularJS, C#</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-success label-inline">Approved</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Beats Audio</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$28,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">VueJS, Ruby</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-primary label-inline">Success</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0 text-left">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">BP Industries</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$3,400,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-info label-inline">Approved</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pt-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sass Technologies</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$970,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-danger label-inline">Rejected</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Tablet-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_table_1_3" role="tabpanel" aria-labelledby="kt_tab_table_1_3">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless table-vertical-center">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0 text-left">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">BP Industries</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$3,400,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-info label-inline">Approved</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pl-0 py-5">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Automatica</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$700,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">Laravel Keen</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-warning label-inline">In Progress</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Python Inc.</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$120,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">AngularJS, C#</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-success label-inline">Approved</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="py-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Beats Audio</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$28,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">VueJS, Ruby</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-primary label-inline">Success</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pt-5 pl-0">
																			<div class="symbol symbol-45 symbol-light mr-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td class="pl-0">
																			<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sass Technologies</a>
																			<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-bold d-block">Paid</span>
																			<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$970,000</span>
																		</td>
																		<td class="text-right">
																			<span class="text-muted font-weight-500">ReactJs, HTML</span>
																		</td>
																		<td class="text-right">
																			<span class="label label-lg label-light-danger label-inline">Rejected</span>
																		</td>
																		<td class="text-right pr-0">
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																					<!--end::Svg Icon-->
																				</span>
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Tablet-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tables Widget 1-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-lg-4">
										<!--begin::Stats Widget 10-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<div id="stats-widget-slider-1" class="carousel slide" data-ride="carousel" data-interval="8000">
													<!--begin::Top-->
													<div class="d-flex align-items-center justify-content-between flex-wrap">
														<!--begin::Label-->
														<span class="font-size-h6 text-muted font-weight-bolder text-uppercase pr-2">Announcements</span>
														<!--end::Label-->
														<!--begin::Action-->
														<div class="p-0">
															<a href="#stats-widget-slider-1" class="btn btn-icon btn-light btn-sm mr-1" role="button" data-slide="prev">
																<span class="svg-icon svg-icon-md">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-left.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<a href="#stats-widget-slider-1" class="btn btn-icon btn-light btn-sm" role="button" data-slide="next">
																<span class="svg-icon svg-icon-md">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
														</div>
														<!--end::Action-->
													</div>
													<!--end::Top-->
													<!--begin::Carousel-->
													<div class="carousel-inner pt-9">
														<!--begin::Item-->
														<div class="carousel-item">
															<!--begin::Section-->
															<div class="d-flex flex-column justify-content-between h-100">
																<!--begin::Title-->
																<h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold cursor-pointer">AirGreat Presentation</h3>
																<!--end::Title-->
																<!--begin::Text-->
																<p class="text-dark-75 font-size-lg font-weight-normal pt-2 mb-0">To start a blog, think of a topic about and first brainstorm ways to write details</p>
																<!--end::Text-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="carousel-item active">
															<!--begin::Section-->
															<div class="d-flex flex-column justify-content-between h-100">
																<!--begin::Title-->
																<h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold cursor-pointer">Keen Admin Launch Day</h3>
																<!--end::Title-->
																<!--begin::Text-->
																<p class="text-dark-75 font-size-lg font-weight-normal pt-2 mb-0">To start a blog, think of a topic about and first brainstorm ways to write details</p>
																<!--end::Text-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Carousel-->
												</div>
											</div>
											<!--end::Body-->
											<!--begin::Footer-->
											<div class="card-footer border-0 d-flex align-items-center justify-content-between pt-0">
												<!--begin::Label-->
												<span class="label label-lg label-light-primary label-inline font-size-sm font-weight-bolder py-5">03 SEP, 20</span>
												<!--end::Label-->
												<a href="#" class="btn btn-sm btn-primary font-weight-bolder px-6">Join</a>
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Stats Widget 10-->
									</div>
									<div class="col-lg-4">
										<!--begin::Stats Widget 11-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<div id="stats-widget-slider-2" class="carousel slide" data-ride="carousel" data-interval="8000">
													<!--begin::Top-->
													<div class="d-flex align-items-center justify-content-between flex-wrap">
														<!--begin::Label-->
														<span class="font-size-h6 text-muted font-weight-bolder text-uppercase pr-2">Projects</span>
														<!--end::Label-->
														<!--begin::Action-->
														<div class="p-0">
															<a href="#stats-widget-slider-2" class="btn btn-icon btn-light btn-sm mr-1" role="button" data-slide="prev">
																<span class="svg-icon svg-icon-md">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-left.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<a href="#stats-widget-slider-2" class="btn btn-icon btn-light btn-sm" role="button" data-slide="next">
																<span class="svg-icon svg-icon-md">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
														</div>
														<!--end::Action-->
													</div>
													<!--end::Top-->
													<!--begin::Carousel-->
													<div class="carousel-inner pt-9">
														<!--begin::Item-->
														<div class="carousel-item">
															<!--begin::Section-->
															<div class="d-flex flex-column justify-content-between h-100">
																<!--begin::Title-->
																<h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold cursor-pointer">AirGreat Presentation</h3>
																<!--end::Title-->
																<!--begin::Text-->
																<p class="text-dark-75 font-size-lg font-weight-normal pt-2 mb-0">To start a blog, think of a topic about and first brainstorm ways to write details</p>
																<!--end::Text-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="carousel-item active">
															<!--begin::Section-->
															<div class="d-flex flex-column justify-content-between h-100">
																<!--begin::Title-->
																<h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold cursor-pointer">Keen Admin Launch Day</h3>
																<!--end::Title-->
																<!--begin::Text-->
																<p class="text-dark-75 font-size-lg font-weight-normal pt-2 mb-0">To start a blog, think of a topic about and first brainstorm ways to write details</p>
																<!--end::Text-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Carousel-->
												</div>
											</div>
											<!--end::Body-->
											<!--begin::Footer-->
											<div class="card-footer border-0 pt-0">
												<!--begin::Status-->
												<div class="flex-grow-1">
													<!--begin::Text-->
													<div class="text-muted font-weight-bold font-size-lg pb-4">Progress</div>
													<!--begendin::Text-->
													<!--begin::Progress-->
													<div class="progress progress-xs bg-light-primary">
														<div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Status-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Stats Widget 11-->
									</div>
									<div class="col-lg-4">
										<!--begin::Stats Widget 12-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<div id="stats-widget-slider-3" class="carousel slide" data-ride="carousel" data-interval="8000">
													<!--begin::Top-->
													<div class="d-flex align-items-center justify-content-between flex-wrap">
														<!--begin::Label-->
														<span class="font-size-h6 text-muted font-weight-bolder text-uppercase pr-2">Today’s Schedule</span>
														<!--end::Label-->
														<!--begin::Action-->
														<div class="p-0">
															<a href="#stats-widget-slider-3" class="btn btn-icon btn-light btn-sm mr-1" role="button" data-slide="prev">
																<span class="svg-icon svg-icon-md">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-left.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<a href="#stats-widget-slider-3" class="btn btn-icon btn-light btn-sm" role="button" data-slide="next">
																<span class="svg-icon svg-icon-md">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
														</div>
														<!--end::Action-->
													</div>
													<!--end::Top-->
													<!--begin::Carousel-->
													<div class="carousel-inner pt-9">
														<!--begin::Item-->
														<div class="carousel-item">
															<!--begin::Section-->
															<div class="flex-grow-1">
																<!--begin::Title-->
																<h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold cursor-pointer">UI/UX Design Updates</h3>
																<!--end::Title-->
																<!--begin::Text-->
																<p class="text-primary font-size-h2 font-weight-bolder pt-3 mb-0">11:15AM - 12:30PM</p>
																<!--end::Text-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="carousel-item active">
															<!--begin::Section-->
															<div class="flex-grow-1">
																<!--begin::Title-->
																<h3 class="font-size-h4 text-dark-75 text-hover-primary font-weight-bold cursor-pointer">UI/UX Design Updates</h3>
																<!--end::Title-->
																<!--begin::Text-->
																<p class="text-primary font-size-h2 font-weight-bolder pt-3 mb-0">11:15AM - 12:30PM</p>
																<!--end::Text-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Carousel-->
												</div>
											</div>
											<!--end::Body-->
											<!--begin::Footer-->
											<div class="card-footer border-0 d-flex align-items-center justify-content-between pt-0">
												<!--begin::Label-->
												<span class="text-muted font-size-lg font-weight-bold pr-2">256 R St. Manhattan NY..</span>
												<!--end::Label-->
												<a href="#" class="btn btn-sm btn-primary font-weight-bolder px-6">Join</a>
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Stats Widget 12-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Table Widget 6-->
								<div class="card card-custom gutter-b">
									<!--begin::Header-->
									<div class="card-header border-0 py-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label font-weight-bold font-size-h4 text-dark-75">Memebrs Progresss</span>
											<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
										</h3>
										<div class="card-toolbar">
											<a href="#" class="btn btn-primary font-weight-bolder font-size-sm">
											<span class="svg-icon svg-icon-md svg-icon-white">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>New Member</a>
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body py-0">
										<!--begin::Table-->
										<div class="table-responsive">
											<table class="table table-borderless table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
												<thead>
													<tr class="text-left">
														<th class="p-0 w-50px"></th>
														<th class="p-0 min-w-200px"></th>
														<th class="p-0 min-w-100px"></th>
														<th class="p-0 min-w-180px"></th>
														<th class="p-0 min-w-200px"></th>
														<th class="p-0 min-w-100px"></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="pr-0 py-4">
															<div class="symbol symbol-45 flex-shrink-0 mr-5 mt-1">
																<img alt="Pic" src="assets/media/users/150-5.jpg" />
															</div>
														</td>
														<td class="pl-0">
															<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Marcus Smart</a>
															<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
														</td>
														<td class="text-right">
															<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$32,000</span>
															<span class="text-muted font-weight-bold">Paid</span>
														</td>
														<td class="text-right pr-lg-25 pr-15">
															<span class="text-muted font-weight-500">ReactJs, HTML</span>
														</td>
														<td class="">
															<div class="d-flex flex-column w-100 mr-2">
																<div class="d-flex align-items-center justify-content-between mb-2">
																	<span class="text-muted mr-2 font-size-sm font-weight-bolder">79%</span>
																	<span class="text-muted font-size-sm font-weight-bold">Progress</span>
																</div>
																<div class="progress progress-xs w-100">
																	<div class="progress-bar bg-danger" role="progressbar" style="width: 79%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</td>
														<td class="pr-0 text-right">
															<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																			<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
														</td>
													</tr>
													<tr>
														<td class="pr-0 py-4">
															<div class="symbol symbol-45 symbol-light-info flex-shrink-0 mr-5">
																<span class="symbol-label font-weight-bolder font-size-lg">AH</span>
															</div>
														</td>
														<td class="pl-0">
															<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Andreas Hawks</a>
															<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
														</td>
														<td class="text-right">
															<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,000</span>
															<span class="text-muted font-weight-bold">Paid</span>
														</td>
														<td class="text-right pr-lg-25 pr-15">
															<span class="text-muted font-weight-500">Python, MySQL</span>
														</td>
														<td>
															<div class="d-flex flex-column w-100 mr-2">
																<div class="d-flex align-items-center justify-content-between mb-2">
																	<span class="text-muted mr-2 font-size-sm font-weight-bolder">65%</span>
																	<span class="text-muted font-size-sm font-weight-bold">Progress</span>
																</div>
																<div class="progress progress-xs w-100">
																	<div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</td>
														<td class="pr-0 text-right">
															<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																			<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
														</td>
													</tr>
													<tr>
														<td class="pr-0 py-5">
															<div class="symbol symbol-45 symbol-light-success flex-shrink-0 mr-5">
																<span class="symbol-label font-weight-bolder font-size-lg">SC</span>
															</div>
														</td>
														<td class="pl-0">
															<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sarah Connor</a>
															<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
														</td>
														<td class="text-right">
															<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$170,000</span>
															<span class="text-muted font-weight-bold">Paid</span>
														</td>
														<td class="text-right pr-lg-25 pr-15">
															<span class="text-muted font-weight-500">Python, MySQL</span>
														</td>
														<td>
															<div class="d-flex flex-column w-100 mr-2">
																<div class="d-flex align-items-center justify-content-between mb-2">
																	<span class="text-muted mr-2 font-size-sm font-weight-bolder">84%</span>
																	<span class="text-muted font-size-sm font-weight-bold">Progress</span>
																</div>
																<div class="progress progress-xs w-100">
																	<div class="progress-bar bg-success" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</td>
														<td class="pr-0 text-right">
															<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																			<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
														</td>
													</tr>
													<tr>
														<td class="pr-0 py-4">
															<div class="symbol symbol-45 flex-shrink-0 mr-3">
																<img alt="Pic" src="assets/media/users/150-7.jpg" />
															</div>
														</td>
														<td class="pl-0">
															<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Amanda Hardenr</a>
															<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
														</td>
														<td class="text-right">
															<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,800</span>
															<span class="text-muted font-weight-bold">Paid</span>
														</td>
														<td class="text-right pr-lg-25 pr-15">
															<span class="text-muted font-weight-500">AngularJS, C#</span>
														</td>
														<td>
															<div class="d-flex flex-column w-100 mr-2">
																<div class="d-flex align-items-center justify-content-between mb-2">
																	<span class="text-muted mr-2 font-size-sm font-weight-bolder">47%</span>
																	<span class="text-muted font-size-sm font-weight-bold">Progress</span>
																</div>
																<div class="progress progress-xs w-100">
																	<div class="progress-bar bg-info" role="progressbar" style="width: 47%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</td>
														<td class="pr-0 text-right">
															<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																			<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
														</td>
													</tr>
													<tr>
														<td class="pr-0 py-4">
															<div class="symbol symbol-45 symbol-light-danger flex-shrink-0 mr-3">
																<span class="symbol-label font-weight-bolder font-size-lg">JT</span>
															</div>
														</td>
														<td class="pl-0">
															<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Jason Tatumr</a>
															<span class="text-muted font-weight-bold d-block">Successful Fellas</span>
														</td>
														<td class="text-right">
															<span class="text-dark-75 font-weight-bolder d-block font-size-lg">$590,000</span>
															<span class="text-muted font-weight-bold">Pending</span>
														</td>
														<td class="text-right pr-lg-25 pr-15">
															<span class="text-muted font-weight-500">ReactJS, Ruby</span>
														</td>
														<td>
															<div class="d-flex flex-column w-100 mr-2">
																<div class="d-flex align-items-center justify-content-between mb-2">
																	<span class="text-muted mr-2 font-size-sm font-weight-bolder">72%</span>
																	<span class="text-muted font-size-sm font-weight-bold">Progress</span>
																</div>
																<div class="progress progress-xs w-100">
																	<div class="progress-bar bg-warning" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</div>
														</td>
														<td class="pr-0 text-right">
															<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																			<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Table Widget 6-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-lg-4">
										<!--begin::List Widget 1-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-6">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Authors Progress</span>
													<span class="text-muted mt-3 font-weight-bold font-size-lg">Avarage +47%</span>
												</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-icon-primary btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1">
																		<rect x="14" y="9" width="6" height="6" rx="3" fill="black" />
																		<rect x="3" y="9" width="6" height="6" rx="3" fill="black" fill-opacity="0.7" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</a>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Naviigation-->
															<ul class="navi navi-hover navi-active navi-accent">
																<li class="navi-header font-weight-bold py-5">
																	<span class="font-size-lg">Quick Actions:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-danger">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																						<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">New Post</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-primary">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<polygon points="0 0 24 0 24 24 0 24" />
																						<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																						<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Add Member</span>
																		<span class="navi-label">
																			<span class="label label-light-danger label-rounded font-weight-bold">3</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-success">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
																						<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Check Projects</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-warning">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-list.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																						<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																						<rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1" />
																						<rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1" />
																						<rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1" />
																						<rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1" />
																						<rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1" />
																						<rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Generate Report</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<span class="svg-icon svg-icon-md svg-icon-info">
																				<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-2.svg-->
																				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																						<rect x="0" y="0" width="24" height="24" />
																						<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
																					</g>
																				</svg>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<span class="navi-text">Settings</span>
																		<span class="navi-label">
																			<span class="label label-light-success label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
																<li class="navi-separator mt-3 opacity-70"></li>
																<li class="navi-footer pt-5 pb-4">
																	<a class="btn btn-light-primary font-weight-bolder btn-sm px-5" href="#">More options</a>
																	<a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
																</li>
															</ul>
															<!--end::Naviigation-->
														</div>
													</div>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-5">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 flex-shrink-0 mr-3">
														<img alt="Pic" src="assets/media/users/150-1.jpg" />
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Ana Larson</a>
															<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
														</div>
														<!--end::Text-->
														<!--begin::Section-->
														<div class="d-flex align-items-center py-2">
															<!--begin::Label-->
															<span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>
															<!--end::Label-->
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light btn-sm">
																<span class="svg-icon svg-icon-md svg-icon-success">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
														<span class="symbol-label font-weight-bolder font-size-lg">AH</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Andreas Hawks</a>
															<span class="text-muted font-weight-bold">Python Developer</span>
														</div>
														<!--end::Text-->
														<!--begin::Section-->
														<div class="d-flex align-items-center py-2">
															<!--begin::Label-->
															<span class="text-success font-weight-bolder font-size-sm pr-6">+23%</span>
															<!--end::Label-->
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light btn-sm">
																<span class="svg-icon svg-icon-md svg-icon-success">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
														<span class="symbol-label font-weight-bolder font-size-lg">SC</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Sarah Connor</a>
															<span class="text-muted font-weight-bold">HTML, CSS. jQuery</span>
														</div>
														<!--end::Text-->
														<!--begin::Section-->
														<div class="d-flex align-items-center py-2">
															<!--begin::Label-->
															<span class="text-danger font-weight-bolder font-size-sm pr-6">-34%</span>
															<!--end::Label-->
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light btn-sm">
																<span class="svg-icon svg-icon-md svg-icon-success">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 flex-shrink-0 mr-3">
														<img alt="Pic" src="assets/media/users/150-12.jpg" />
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Jhonny Harden</a>
															<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
														</div>
														<!--end::Text-->
														<!--begin::Section-->
														<div class="d-flex align-items-center py-2">
															<!--begin::Label-->
															<span class="text-success font-weight-bolder font-size-sm pr-6">+72%</span>
															<!--end::Label-->
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light btn-sm">
																<span class="svg-icon svg-icon-md svg-icon-success">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
														<span class="symbol-label font-weight-bolder font-size-lg">SR</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Sean Robbins</a>
															<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
														</div>
														<!--end::Text-->
														<!--begin::Section-->
														<div class="d-flex align-items-center py-2">
															<!--begin::Label-->
															<span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>
															<!--end::Label-->
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light btn-sm">
																<span class="svg-icon svg-icon-md svg-icon-success">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
														<span class="symbol-label font-weight-bolder font-size-lg">JT</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Jason Tatum</a>
															<span class="text-muted font-weight-bold">ASP.NET Developer</span>
														</div>
														<!--end::Text-->
														<!--begin::Section-->
														<div class="d-flex align-items-center py-2">
															<!--begin::Label-->
															<span class="text-success font-weight-bolder font-size-sm pr-6">+139%</span>
															<!--end::Label-->
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light btn-sm">
																<span class="svg-icon svg-icon-md svg-icon-success">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 1-->
									</div>
									<div class="col-lg-4">
										<!--begin::List Widget 2-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-6">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Authors Earninigs</span>
													<span class="text-muted mt-3 font-weight-bold font-size-lg">Avarage +47%</span>
												</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
														<a href="#" class="btn btn-icon-primary btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<span class="svg-icon svg-icon-lg">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Dots.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1">
																		<rect x="14" y="9" width="6" height="6" rx="3" fill="black" />
																		<rect x="3" y="9" width="6" height="6" rx="3" fill="black" fill-opacity="0.7" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</a>
														<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header pb-1">
																	<span class="text-primary text-uppercase font-weight-bolder font-size-sm">Add new:</span>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-shopping-cart-1"></i>
																		</span>
																		<span class="navi-text">Order</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-calendar-8"></i>
																		</span>
																		<span class="navi-text">Event</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-danger label-inline font-weight-bold">new</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-graph-1"></i>
																		</span>
																		<span class="navi-text">Report</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
																		<span class="navi-text">Post</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-success label-rounded font-weight-bolder">5</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-writing"></i>
																		</span>
																		<span class="navi-text">File</span>
																	</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-7">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 flex-shrink-0 mr-3">
														<img alt="Pic" src="assets/media/users/150-5.jpg" />
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex align-items-center flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Marcus Smart</a>
															<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
														</div>
														<!--begin::Label-->
														<span class="text-dark-50 font-weight-bold font-size-lg py-2">$8300</span>
														<!--end::Label-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
														<span class="symbol-label font-weight-bolder font-size-lg">AH</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex align-items-center flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Andreas Hawks</a>
															<span class="text-muted font-weight-bold">Python Developer</span>
														</div>
														<!--end::Text-->
														<!--begin::Label-->
														<span class="text-dark-50 font-weight-bold font-size-lg py-2">$740</span>
														<!--end::Label-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
														<span class="symbol-label font-weight-bolder font-size-lg">SC</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex align-items-center flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Sarah Connor</a>
															<span class="text-muted font-weight-bold">HTML, CSS. jQuery</span>
														</div>
														<!--end::Text-->
														<!--begin::Label-->
														<span class="text-dark-50 font-weight-bold font-size-lg py-2">$92</span>
														<!--end::Label-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 flex-shrink-0 mr-3">
														<img alt="Pic" src="assets/media/users/150-7.jpg" />
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex align-items-center flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Amanda Harden</a>
															<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
														</div>
														<!--end::Text-->
														<!--begin::Label-->
														<span class="text-dark-50 font-weight-bold font-size-lg py-2">$10,500</span>
														<!--end::Label-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
														<span class="symbol-label font-weight-bolder font-size-lg">SR</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex align-items-center flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Sean Robbins</a>
															<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
														</div>
														<!--end::Text-->
														<!--begin::Label-->
														<span class="text-dark-50 font-weight-bold font-size-lg py-2">$204</span>
														<!--end::Label-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
														<span class="symbol-label font-weight-bolder font-size-lg">JT</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Content-->
													<div class="d-flex align-items-center flex-wrap flex-row-fluid">
														<!--begin::Text-->
														<div class="d-flex flex-column pr-5 flex-grow-1">
															<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bolder font-size-lg">Jason Tatum</a>
															<span class="text-muted font-weight-bold">ASP.NET Developer</span>
														</div>
														<!--end::Text-->
														<!--begin::Label-->
														<span class="text-dark-50 font-weight-bold font-size-lg py-2">$1.270</span>
														<!--end::Label-->
													</div>
													<!--end::Content-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 2-->
									</div>
									<div class="col-lg-4">
										<!--begin::List Widget 3-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header border-0 pt-7">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Audio Files</span>
													<span class="text-muted mt-3 font-weight-bold font-size-lg">479 Tracks</span>
												</h3>
												<div class="card-toolbar">
													<ul class="nav nav-pills nav-pills-sm nav-dark">
														<li class="nav-item ml-0">
															<a class="nav-link py-2 px-4 font-weight-bolder font-size-sm" data-toggle="tab" href="#kt_tab_list_3_1">Latest</a>
														</li>
														<li class="nav-item">
															<a class="nav-link py-2 px-4 active font-weight-bolder font-size-sm" data-toggle="tab" href="#kt_tab_list_3_2">Popular</a>
														</li>
													</ul>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2">
												<div class="tab-content mt-5" id="myTabList3">
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_tab_list_3_1" role="tabpanel" aria-labelledby="kt_tab_list_3_1">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-7">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">AirTicks Meeting</a>
																<span class="text-muted font-weight-bold">1.4MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-7">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">From a Distance</a>
																<span class="text-muted font-weight-bold">8MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-7">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">Space Weawer</a>
																<span class="text-muted font-weight-bold">409MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-7">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">Sunspots</a>
																<span class="text-muted font-weight-bold">26MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-7">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">Ocean Drive</a>
																<span class="text-muted font-weight-bold">3.2MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">Soar, Eco</a>
																<span class="text-muted font-weight-bold">209MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_list_3_2" role="tabpanel" aria-labelledby="kt_tab_list_3_2">
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-7">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">Sunspots</a>
																<span class="text-muted font-weight-bold">26MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-7">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">Ocean Drive</a>
																<span class="text-muted font-weight-bold">3.2MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-7">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">Soar, Eco</a>
																<span class="text-muted font-weight-bold">209MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-7">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">AirTicks Meeting</a>
																<span class="text-muted font-weight-bold">1.4MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center mb-7">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">From a Distance</a>
																<span class="text-muted font-weight-bold">8MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="d-flex align-items-center">
															<!--begin::Btn-->
															<a href="#" class="btn btn-icon btn-light-primary font-weight-bold btn-md mr-3">
																<span class="svg-icon svg-icon-xxl">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Play.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M9.82866499,18.2771971 L16.5693679,12.3976203 C16.7774696,12.2161036 16.7990211,11.9002555 16.6175044,11.6921539 C16.6029128,11.6754252 16.5872233,11.6596867 16.5705402,11.6450431 L9.82983723,5.72838979 C9.62230202,5.54622572 9.30638833,5.56679309 9.12422426,5.7743283 C9.04415337,5.86555116 9,5.98278612 9,6.10416552 L9,17.9003957 C9,18.1765381 9.22385763,18.4003957 9.5,18.4003957 C9.62084305,18.4003957 9.73759731,18.3566309 9.82866499,18.2771971 Z" fill="#000000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</a>
															<!--end::Btn-->
															<!--begin::Text-->
															<div class="d-flex flex-column flex-grow-1">
																<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg font-weight-bolder">Space Weawer</a>
																<span class="text-muted font-weight-bold">409MB</span>
															</div>
															<!--end::Text-->
															<!--begin::Dropdown-->
															<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																<a href="#" class="btn btn-icon-primary btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="ki ki-dots"></i>
																</a>
																<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																	<!--begin::Navigation-->
																	<ul class="navi navi-hover">
																		<li class="navi-header font-weight-bold py-4">
																			<span class="font-size-lg">Choose Option:</span>
																			<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																		</li>
																		<li class="navi-separator mb-3 opacity-70"></li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-primary">Orders</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-danger">Reports</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-warning">Tasks</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-success">Events</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-item">
																			<a href="#" class="navi-link">
																				<span class="navi-text">
																					<span class="label label-xl label-inline label-light-dark">Members</span>
																				</span>
																			</a>
																		</li>
																		<li class="navi-separator mt-3 opacity-70"></li>
																		<li class="navi-footer py-4">
																			<a class="btn btn-primary font-weight-bold btn-sm px-5" href="#">
																			<i class="ki ki-plus icon-sm"></i>Create</a>
																		</li>
																	</ul>
																	<!--end::Navigation-->
																</div>
															</div>
															<!--end::Dropdown-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 3-->
									</div>
								</div>
								<!--end::Row-->
								<!--end::Dashboard-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2020©</span>
								<a href="https://keenthemes.com/keen" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark">
								<a href="https://keenthemes.com/keen" target="_blank" class="nav-link pl-0 pr-2">About</a>
								<a href="https://keenthemes.com/keen" target="_blank" class="nav-link pr-2">Team</a>
								<a href="https://keenthemes.com/keen" target="_blank" class="nav-link pr-0">Contact</a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
				<h3 class="font-weight-bold m-0">User Profile
				<small class="text-muted font-size-sm ml-2">15 messages</small></h3>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content pr-5 mr-n5">
				<!--begin::Header-->
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
						<div class="symbol-label" style="background-image:url('assets/media/users/150-6.jpg')"></div>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">Ryan Smith</a>
						<div class="text-muted mt-1">Art Director</div>
						<div class="navi mt-1">
							<a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary">ryan@keen.com</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Separator-->
				<div class="separator separator-dashed mt-8 mb-5"></div>
				<!--end::Separator-->
				<!--begin::Nav-->
				<div class="navi navi-spacer-x-0 p-0">
					<!--begin::Item-->
					<a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
						<div class="navi-link">
							<div class="symbol symbol-40 bg-light mr-3">
								<div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-danger">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Adress-book2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3" />
												<path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold">My Account</div>
								<div class="text-muted">Profile info
								<span class="label label-light-danger label-inline font-weight-bold">update</span></div>
							</div>
						</div>
					</a>
					<!--end:Item-->
					<!--begin::Item-->
					<a href="custom/apps/user/profile-3.html" class="navi-item">
						<div class="navi-link">
							<div class="symbol symbol-40 bg-light mr-3">
								<div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-success">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
												<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold">My Tasks</div>
								<div class="text-muted">Todo and tasks</div>
							</div>
						</div>
					</a>
					<!--end:Item-->
					<!--begin::Item-->
					<a href="custom/apps/user/profile-2.html" class="navi-item">
						<div class="navi-link">
							<div class="symbol symbol-40 bg-light mr-3">
								<div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-primary">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Half-star.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z" fill="#000000" opacity="0.3" />
												<path d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z" fill="#000000" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold">My Events</div>
								<div class="text-muted">Logs and notifications</div>
							</div>
						</div>
					</a>
					<!--end:Item-->
					<!--begin::Item-->
					<a href="custom/apps/userprofile-1/overview.html" class="navi-item">
						<div class="navi-link">
							<div class="symbol symbol-40 bg-light mr-3">
								<div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-info">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
												<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold">My Statements</div>
								<div class="text-muted">latest tasks and projects</div>
							</div>
						</div>
					</a>
					<!--end:Item-->
					<!--begin::Item-->
					<span class="navi-item mt-2">
						<span class="navi-link">
							<a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-3 px-6">Sign Out</a>
						</span>
					</span>
					<!--end:Item-->
				</div>
				<!--end::Nav-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-7"></div>
				<!--end::Separator-->
				<!--begin::Notifications-->
				<div class="pt-5">
					<!--begin:Heading-->
					<h5 class="mb-7">Recent Notifications</h5>
					<!--end:Heading-->
					<!--begin::Item-->
					<div class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b">
						<!--begin::Icon-->
						<div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
							<span class="svg-icon svg-icon-4x svg-icon-primary position-absolute opacity-15">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-polygon.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">
									<g stroke="none" stroke-width="1" fill-rule="evenodd">
										<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<span class="svg-icon svg-icon-lg svg-icon-primary position-absolute">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-done.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</div>
						<!--end::Icon-->
						<!--begin::Description-->
						<div class="ml-1">
							<h3 class="text-dark-75 font-weight-bolder font-size-lg">Important Notice</h3>
							<p class="m-0 text-dark-50 font-weight-bold">Lorem Ipsum is simply dummy text of the printing and industry.</p>
						</div>
						<!--end::Description-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b">
						<!--begin::Icon-->
						<div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
							<span class="svg-icon svg-icon-4x svg-icon-danger position-absolute opacity-15">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-polygon.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">
									<g stroke="none" stroke-width="1" fill-rule="evenodd">
										<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<span class="svg-icon svg-icon-lg svg-icon-danger position-absolute">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
										<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</div>
						<!--end::Icon-->
						<!--begin::Description-->
						<div class="ml-1">
							<h3 class="text-dark-75 font-weight-bolder font-size-lg">System Update</h3>
							<p class="m-0 text-dark-50 font-weight-bold">There are many variations of passages of Lorem Ipsum available.</p>
						</div>
						<!--end::Description-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b">
						<!--begin::Icon-->
						<div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
							<span class="svg-icon svg-icon-4x svg-icon-success position-absolute opacity-15">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-polygon.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">
									<g stroke="none" stroke-width="1" fill-rule="evenodd">
										<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<span class="svg-icon svg-icon-lg svg-icon-success position-absolute">
								<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
										<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</div>
						<!--end::Icon-->
						<!--begin::Description-->
						<div class="ml-1">
							<h3 class="text-dark-75 font-weight-bolder font-size-lg">Server Maintenance</h3>
							<p class="m-0 text-dark-50 font-weight-bold">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
						</div>
						<!--end::Description-->
					</div>
					<!--end::Item-->
					<!--begin::Item-->
					<div class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b">
						<!--begin::Icon-->
						<div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">
							<span class="svg-icon svg-icon-4x svg-icon-info position-absolute opacity-15">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-polygon.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">
									<g stroke="none" stroke-width="1" fill-rule="evenodd">
										<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<span class="svg-icon svg-icon-lg svg-icon-info position-absolute">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Alarm-clock.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M7.14319965,19.3575259 C7.67122143,19.7615175 8.25104409,20.1012165 8.87097532,20.3649307 L7.89205065,22.0604779 C7.61590828,22.5387706 7.00431787,22.7026457 6.52602525,22.4265033 C6.04773263,22.150361 5.88385747,21.5387706 6.15999985,21.0604779 L7.14319965,19.3575259 Z M15.1367085,20.3616573 C15.756345,20.0972995 16.3358198,19.7569961 16.8634386,19.3524415 L17.8320512,21.0301278 C18.1081936,21.5084204 17.9443184,22.1200108 17.4660258,22.3961532 C16.9877332,22.6722956 16.3761428,22.5084204 16.1000004,22.0301278 L15.1367085,20.3616573 Z" fill="#000000" />
										<path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z M19.068812,3.25407593 L20.8181344,5.00339833 C21.4039208,5.58918477 21.4039208,6.53893224 20.8181344,7.12471868 C20.2323479,7.71050512 19.2826005,7.71050512 18.696814,7.12471868 L16.9474916,5.37539627 C16.3617052,4.78960984 16.3617052,3.83986237 16.9474916,3.25407593 C17.5332781,2.66828949 18.4830255,2.66828949 19.068812,3.25407593 Z M5.29862906,2.88207799 C5.8844155,2.29629155 6.83416297,2.29629155 7.41994941,2.88207799 C8.00573585,3.46786443 8.00573585,4.4176119 7.41994941,5.00339833 L5.29862906,7.12471868 C4.71284263,7.71050512 3.76309516,7.71050512 3.17730872,7.12471868 C2.59152228,6.53893224 2.59152228,5.58918477 3.17730872,5.00339833 L5.29862906,2.88207799 Z" fill="#000000" opacity="0.3" />
										<path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</div>
						<!--end::Icon-->
						<!--begin::Description-->
						<div class="ml-1">
							<h3 class="text-dark-75 font-weight-bolder font-size-lg">DB Migration</h3>
							<p class="m-0 text-dark-50 font-weight-bold">If you are going to use a passage of Lorem Ipsum, you need.</p>
						</div>
						<!--end::Description-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Notifications-->
			</div>
			<!--end::Content-->
		</div>
		<!-- end::User Panel-->
		<!--begin::Quick Panel-->
		<div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
			<!--begin::Header-->
			<div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
				<ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
					</li>
				</ul>
				<div class="offcanvas-close mt-n1 pr-5">
					<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
						<i class="ki ki-close icon-xs text-muted"></i>
					</a>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content px-10">
				<div class="tab-content">
					<!--begin::Tabpane-->
					<div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
						<!--begin::Section-->
						<div class="mb-15">
							<h5 class="font-weight-bold mb-5">System Messages</h5>
							<!--begin::Timeline-->
							<div class="timeline timeline-5">
								<div class="timeline-items">
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Icon-->
										<div class="timeline-media bg-light-primary">
											<span class="svg-icon svg-icon-primary svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
														<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="timeline-desc timeline-desc-light-primary">
											<span class="font-weight-bolder text-primary">09:30 AM</span>
											<p class="font-weight-normal text-dark-50 pb-2">To start a blog, think of a topic about and first brainstorm ways to write details</p>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Icon-->
										<div class="timeline-media bg-light-warning">
											<span class="svg-icon svg-icon-warning svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
														<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
														<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
														<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="timeline-desc timeline-desc-light-warning">
											<span class="font-weight-bolder text-warning">2:45 PM</span>
											<p class="font-weight-normal text-dark-50 pt-1 pb-2">To start a blog, think of a topic about and first brainstorm ways to write details</p>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Icon-->
										<div class="timeline-media bg-light-success">
											<span class="svg-icon svg-icon-success svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
														<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="timeline-desc timeline-desc-light-success">
											<span class="font-weight-bolder text-success">3:12 PM</span>
											<p class="font-weight-normal text-dark-50 pt-1 pb-2">To start a blog, think of a topic about and first brainstorm ways to write details</p>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="timeline-item">
										<!--begin::Icon-->
										<div class="timeline-media bg-light-danger">
											<span class="svg-icon svg-icon-danger svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="timeline-desc timeline-desc-light-danger">
											<span class="font-weight-bolder text-danger">7:05 PM</span>
											<p class="font-weight-normal text-dark-50 pt-1">To start a blog, think of a topic about and first brainstorm ways to write details</p>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Item-->
								</div>
							</div>
							<!--end::Timeline-->
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="mb-5">
							<h5 class="font-weight-bold mb-5">Notifications</h5>
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Symbol-->
								<div class="symbol symbol-35 flex-shrink-0 mr-3">
									<img alt="Pic" src="assets/media/users/150-5.jpg" />
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-5 flex-grow-1">
										<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Marcus Smart</a>
										<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>
										<!--end::Label-->
										<!--begin::Btn-->
										<a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</span>
										</a>
										<!--end::Btn-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Symbol-->
								<div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
									<span class="symbol-label font-weight-bolder font-size-lg">AH</span>
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-5 flex-grow-1">
										<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Andreas Hawks</a>
										<span class="text-muted font-weight-bold">Python Developer</span>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-success font-weight-bolder font-size-sm pr-6">+23%</span>
										<!--end::Label-->
										<!--begin::Btn-->
										<a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</span>
										</a>
										<!--end::Btn-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Symbol-->
								<div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
									<span class="symbol-label font-weight-bolder font-size-lg">SC</span>
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-5 flex-grow-1">
										<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Sarah Connor</a>
										<span class="text-muted font-weight-bold">HTML, CSS. jQuery</span>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-danger font-weight-bolder font-size-sm pr-6">-34%</span>
										<!--end::Label-->
										<!--begin::Btn-->
										<a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</span>
										</a>
										<!--end::Btn-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Symbol-->
								<div class="symbol symbol-35 flex-shrink-0 mr-3">
									<img alt="Pic" src="assets/media/users/150-7.jpg" />
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-5 flex-grow-1">
										<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Amanda Harden</a>
										<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-success font-weight-bolder font-size-sm pr-6">+72%</span>
										<!--end::Label-->
										<!--begin::Btn-->
										<a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</span>
										</a>
										<!--end::Btn-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-6">
								<!--begin::Symbol-->
								<div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
									<span class="symbol-label font-weight-bolder font-size-lg">SR</span>
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-5 flex-grow-1">
										<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Sean Robbins</a>
										<span class="text-muted font-weight-bold">UI/UX, Art Director</span>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>
										<!--end::Label-->
										<!--begin::Btn-->
										<a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</span>
										</a>
										<!--end::Btn-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center">
								<!--begin::Symbol-->
								<div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
									<span class="symbol-label font-weight-bolder font-size-lg">JT</span>
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-5 flex-grow-1">
										<a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Jason Tatum</a>
										<span class="text-muted font-weight-bold">ASP.NET Developer</span>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-success font-weight-bolder font-size-sm pr-6">+139%</span>
										<!--end::Label-->
										<!--begin::Btn-->
										<a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</span>
										</a>
										<!--end::Btn-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Section-->
					</div>
					<!--end::Tabpane-->
					<!--begin::Tabpane-->
					<div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
						<!--begin::Nav-->
						<div class="navi navi-icon-circle navi-spacer-x-0">
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-bell text-success icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">5 new user generated report</div>
										<div class="text-muted">Reports based on sales</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon2-box text-danger icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">2 new items submited</div>
										<div class="text-muted">by Grog John</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-psd text-primary icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">79 PSD files generated</div>
										<div class="text-muted">Reports based on sales</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon2-supermarket text-warning icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
										<div class="text-muted">Total 234 items</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-paper-plane-1 text-success icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
										<div class="text-muted">Fostest is Barry</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-safe-shield-protection text-danger icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">3 Defence alerts</div>
										<div class="text-muted">40% less alerts thar last week</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-notepad text-primary icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">Avarage 4 blog posts per author</div>
										<div class="text-muted">Most posted 12 time</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-users-1 text-warning icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">16 authors joined last week</div>
										<div class="text-muted">9 photodrapehrs, 7 designer</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon2-box text-info icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">2 new items have been submited</div>
										<div class="text-muted">by Grog John</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon2-download text-success icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">2.8 GB-total downloads size</div>
										<div class="text-muted">Mostly PSD end AL concepts</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon2-supermarket text-danger icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
										<div class="text-muted">Total 234 items</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-bell text-primary icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">7 new user generated report</div>
										<div class="text-muted">Reports based on sales</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
							<!--begin::Item-->
							<a href="#" class="navi-item">
								<div class="navi-link rounded">
									<div class="symbol symbol-50 mr-3">
										<div class="symbol-label">
											<i class="flaticon-paper-plane-1 text-success icon-lg"></i>
										</div>
									</div>
									<div class="navi-text">
										<div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
										<div class="text-muted">Fostest is Barry</div>
									</div>
								</div>
							</a>
							<!--end::Item-->
						</div>
						<!--end::Nav-->
					</div>
					<!--end::Tabpane-->
					<!--begin::Tabpane-->
					<div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
						<form class="form">
							<!--begin::Section-->
							<div class="pt-1">
								<h4 class="mb-7">Privacy Settings:</h4>
								<div class="pb-5">
									<div class="checkbox-inline mb-2">
										<label class="checkbox">
										<input type="checkbox" />
										<span></span>You have new notifications.</label>
									</div>
									<div class="checkbox-inline mb-2">
										<label class="checkbox">
										<input type="checkbox" />
										<span></span>You're sent a direct message</label>
									</div>
									<div class="checkbox-inline mb-2">
										<label class="checkbox">
										<input type="checkbox" checked="checked" />
										<span></span>Someone adds you as a connection</label>
									</div>
									<div class="checkbox-inline mb-2">
										<label class="checkbox checkbox-success">
										<input type="checkbox" />
										<span></span>Upon new order</label>
									</div>
									<div class="checkbox-inline mb-2">
										<label class="checkbox checkbox-success">
										<input type="checkbox" />
										<span></span>New membership approval</label>
									</div>
								</div>
								<!--begin::Group-->
								<div class="text-muted">After you log in, you will be asked for additional information to confirm your identity.</div>
								<!--end::Group-->
							</div>
							<!--end::Section-->
							<div class="separator separator-dashed my-8"></div>
							<!--begin::Section-->
							<div class="pt-1">
								<h4 class="mb-7">Security Settings:</h4>
								<div class="pb-5">
									<div class="checkbox-inline">
										<label class="checkbox mb-2">
										<input type="checkbox" />
										<span></span>Personal information safety</label>
									</div>
									<p class="form-text text-muted pb-5 mb-0">After you log in, you will be asked for additional information to confirm your identity. For extra security, this requires you to confirm your email.
									<a href="#" class="font-weight-bold">Learn more</a>.</p>
									<button type="button" class="btn btn-light-danger font-weight-bolder btn-sm">Setup login verification</button>
								</div>
							</div>
							<!--end::Section-->
						</form>
					</div>
					<!--end::Tabpane-->
				</div>
			</div>
			<!--end::Content-->
		</div>
		<!--end::Quick Panel-->
		<!--begin::Chat Panel-->
		<div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<!--begin::Card-->
					<div class="card card-custom">
						<!--begin::Header-->
						<div class="card-header align-items-center px-4 py-3">
							<div class="text-left flex-grow-1">
								<!--begin::Dropdown Menu-->
								<div class="dropdown dropdown-inline">
									<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</button>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
										<!--begin::Navigation-->
										<ul class="navi navi-hover py-5">
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													<span class="navi-text">Member</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																	<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																	<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													<span class="navi-text">Contact</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Time-schedule.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000" />
																	<path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													<span class="navi-text">Event</span>
													<span class="navi-link-badge">
														<span class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Git3.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M7,11 L15,11 C16.1045695,11 17,10.1045695 17,9 L17,8 L19,8 L19,9 C19,11.209139 17.209139,13 15,13 L7,13 L7,15 C7,15.5522847 6.55228475,16 6,16 C5.44771525,16 5,15.5522847 5,15 L5,9 C5,8.44771525 5.44771525,8 6,8 C6.55228475,8 7,8.44771525 7,9 L7,11 Z" fill="#000000" opacity="0.3" />
																	<path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													<span class="navi-text">Task</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Settings4.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													<span class="navi-text">Settings</span>
												</a>
											</li>
											<li class="navi-separator my-3"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																	<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																	<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													<span class="navi-text">Help</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Safe-chat.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3" />
																	<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
													<span class="navi-text">Privacy</span>
													<span class="navi-link-badge">
														<span class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
								<!--end::Dropdown Menu-->
							</div>
							<div class="text-center flex-grow-1">
								<div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
								<div>
									<span class="label label-dot label-success"></span>
									<span class="font-weight-bold text-muted font-size-sm">Active</span>
								</div>
							</div>
							<div class="text-right flex-grow-1">
								<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
									<i class="ki ki-close icon-1x"></i>
								</button>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Scroll-->
							<div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
								<!--begin::Messages-->
								<div class="messages">
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="assets/media/users/150-11.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">2 Hours</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">How likely are you to recommend our company to your friends and family?</div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">3 minutes</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="assets/media/users/150-9.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
									</div>
									<!--end::Message Out-->
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="assets/media/users/150-11.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">40 seconds</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Ok, Understood!</div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">Just now</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="assets/media/users/150-9.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">You’ll receive notifications for all issues, pull requests!</div>
									</div>
									<!--end::Message Out-->
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="assets/media/users/150-2.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">40 seconds</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">You can unwatch this repository immediately by clicking here:
										<a href="#">https://github.com</a></div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">Just now</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="assets/media/users/150-9.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
									</div>
									<!--end::Message Out-->
									<!--begin::Message In-->
									<div class="d-flex flex-column mb-5 align-items-start">
										<div class="d-flex align-items-center">
											<div class="symbol symbol-circle symbol-40 mr-3">
												<img alt="Pic" src="assets/media/users/150-2.jpg" />
											</div>
											<div>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
												<span class="text-muted font-size-sm">40 seconds</span>
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Most purchased Business courses during this sale!</div>
									</div>
									<!--end::Message In-->
									<!--begin::Message Out-->
									<div class="d-flex flex-column mb-5 align-items-end">
										<div class="d-flex align-items-center">
											<div>
												<span class="text-muted font-size-sm">Just now</span>
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
											</div>
											<div class="symbol symbol-circle symbol-40 ml-3">
												<img alt="Pic" src="assets/media/users/150-9.jpg" />
											</div>
										</div>
										<div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
									</div>
									<!--end::Message Out-->
								</div>
								<!--end::Messages-->
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="card-footer align-items-center">
							<!--begin::Compose-->
							<textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
							<div class="d-flex align-items-center justify-content-between mt-5">
								<div class="mr-3">
									<a href="#" class="btn btn-clean btn-icon btn-md mr-1">
										<i class="flaticon2-photograph icon-lg"></i>
									</a>
									<a href="#" class="btn btn-clean btn-icon btn-md">
										<i class="flaticon2-photo-camera icon-lg"></i>
									</a>
								</div>
								<div>
									<button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
								</div>
							</div>
							<!--begin::Compose-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
			</div>
		</div>
		<!--end::Chat Panel-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Sticky Toolbar-->
		<ul class="sticky-toolbar nav flex-column pl-2 pr-2 pt-3 pb-3 mt-4">
			<!--begin::Item-->
			<li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos" data-placement="right">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-success btn-hover-success" href="#">
					<span class="svg-icon svg-icon-lg">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
								<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" title="Layout Builder" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="https://preview.keenthemes.com/keen/demo1/builder.html" target="_blank">
					<span class="svg-icon svg-icon-lg">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Settings.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect opacity="0.200000003" x="0" y="0" width="24" height="24" />
								<path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" fill="#000000" opacity="0.3" />
								<path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" fill="#000000" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" title="Documentation" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-warning btn-hover-warning" href="https://keenthemes.com/keen/?page=docs" target="_blank">
					<span class="svg-icon svg-icon-lg">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Align-auto.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path d="M9.61764706,5 L8.73529412,7 L3,7 C2.44771525,7 2,6.55228475 2,6 C2,5.44771525 2.44771525,5 3,5 L9.61764706,5 Z M14.3823529,5 L21,5 C21.5522847,5 22,5.44771525 22,6 C22,6.55228475 21.5522847,7 21,7 L15.2647059,7 L14.3823529,5 Z M6.08823529,13 L5.20588235,15 L3,15 C2.44771525,15 2,14.5522847 2,14 C2,13.4477153 2.44771525,13 3,13 L6.08823529,13 Z M17.9117647,13 L21,13 C21.5522847,13 22,13.4477153 22,14 C22,14.5522847 21.5522847,15 21,15 L18.7941176,15 L17.9117647,13 Z M7.85294118,9 L6.97058824,11 L3,11 C2.44771525,11 2,10.5522847 2,10 C2,9.44771525 2.44771525,9 3,9 L7.85294118,9 Z M16.1470588,9 L21,9 C21.5522847,9 22,9.44771525 22,10 C22,10.5522847 21.5522847,11 21,11 L17.0294118,11 L16.1470588,9 Z M4.32352941,17 L3.44117647,19 L3,19 C2.44771525,19 2,18.5522847 2,18 C2,17.4477153 2.44771525,17 3,17 L4.32352941,17 Z M19.6764706,17 L21,17 C21.5522847,17 22,17.4477153 22,18 C22,18.5522847 21.5522847,19 21,19 L20.5588235,19 L19.6764706,17 Z" fill="#000000" opacity="0.3" />
								<path d="M11.044,5.256 L13.006,5.256 L18.5,19 L16,19 L14.716,15.084 L9.19,15.084 L7.5,19 L5,19 L11.044,5.256 Z M13.924,13.14 L11.962,7.956 L9.964,13.14 L13.924,13.14 Z" fill="#000000" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="Chat Example" data-placement="left">
				<a class="btn btn-sm btn-icon btn-bg-light btn-icon-info btn-hover-danger" href="#" data-toggle="modal" data-target="#kt_chat_modal">
					<span class="svg-icon svg-icon-lg">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat6.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M14.4862 18L12.7975 21.0566C12.5304 21.54 11.922 21.7153 11.4386 21.4483C11.2977 21.3704 11.1777 21.2597 11.0887 21.1255L9.01653 18H5C3.34315 18 2 16.6569 2 15V6C2 4.34315 3.34315 3 5 3H19C20.6569 3 22 4.34315 22 6V15C22 16.6569 20.6569 18 19 18H14.4862Z" fill="black" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M6 7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H6C5.44772 9 5 8.55228 5 8C5 7.44772 5.44772 7 6 7ZM6 11H11C11.5523 11 12 11.4477 12 12C12 12.5523 11.5523 13 11 13H6C5.44772 13 5 12.5523 5 12C5 11.4477 5.44772 11 6 11Z" fill="black" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
		</ul>
		<!--end::Sticky Toolbar-->
		<!--begin::Demo Panel-->
		<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
				<h4 class="font-weight-bold m-0">Select A Demo</h4>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content">
				<!--begin::Wrapper-->
				<div class="offcanvas-wrapper mb-5 scroll-pull">
					<h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo1.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo1/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">HTML</a>
							<a href="https://preview.keenthemes.com/keen/demo1/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo2.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo2/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">HTML</a>
							<a href="https://preview.keenthemes.com/keen/demo2/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo3.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo3/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">HTML</a>
							<a href="https://preview.keenthemes.com/keen/demo3/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo4.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo4/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">HTML</a>
							<a href="https://preview.keenthemes.com/keen/demo4/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo5.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo5/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">HTML</a>
							<a href="https://preview.keenthemes.com/keen/demo5/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo6.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo6/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">HTML</a>
							<a href="https://preview.keenthemes.com/keen/demo6/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo7.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="../../demo7/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">HTML</a>
							<a href="https://preview.keenthemes.com/keen/demo7/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo8.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
					<h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
					<div class="overlay rounded-lg mb-8 offcanvas-demo">
						<div class="overlay-wrapper rounded-lg">
							<img src="assets/media/demos/demo9.png" alt="" class="w-100" />
						</div>
						<div class="overlay-layer">
							<a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
						</div>
					</div>
				</div>
				<!--end::Wrapper-->
				<!--begin::Purchase-->
				<div class="offcanvas-footer">
					<a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Keen Now!</a>
				</div>
				<!--end::Purchase-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Demo Panel-->

		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3E97FF", "secondary": "#E5EAEE", "success": "#08D1AD", "info": "#844AFF", "warning": "#F5CE01", "danger": "#FF3D60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#DEEDFF", "secondary": "#EBEDF3", "success": "#D6FBF4", "info": "#6125E1", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/widgets.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
