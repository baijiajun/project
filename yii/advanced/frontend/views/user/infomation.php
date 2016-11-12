				<div class="main-content">
					<div class="page-content">
						<div class="page-header">
							<h1>
								用户个人信息
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="assets1/avatars/profile-pic.jpg" />
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<i class="icon-circle light-green middle"></i>
															&nbsp;
															<span class="white"><?php echo $res[0]['true_name'];?></span>
														</a>
													</div>
												</div>
											</div>

											<div class="space-6"></div>

											<div class="profile-contact-info">
												<div class="profile-contact-links align-left">
													<a class="btn btn-link" href="#">
														<i class="icon-plus-sign bigger-120 green"></i>
														<?php echo $res[0]['qq']?>
													</a>

													<a class="btn btn-link" href="#">
														<i class="icon-envelope bigger-120 pink"></i>
														<?php echo $res[0]['email']?>
													</a>

													<a class="btn btn-link" href="<?php echo $res[0]['blog']?>">
														<i class="icon-globe bigger-125 blue"></i>
														<?php echo $res[0]['blog']?>
													</a>
												</div>

												<div class="space-6"></div>

												<div class="profile-social-links center">
													<a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
														<i class="middle icon-facebook-sign icon-2x blue"></i>
													</a>

													<a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
														<i class="middle icon-twitter-sign icon-2x light-blue"></i>
													</a>

													<a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
														<i class="middle icon-pinterest-sign icon-2x red"></i>
													</a>
												</div>
											</div>

											<div class="hr hr12 dotted"></div>

											<div class="clearfix">
												<div class="grid2">
													<span class="bigger-175 blue">25</span>

													<br />
													Followers
												</div>

												<div class="grid2">
													<span class="bigger-175 blue">12</span>

													<br />
													Following
												</div>
											</div>

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> 姓名 </div>

													<div class="profile-info-value">
														<span class="editable" id="username"><?php echo $res[0]['true_name']?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 祖籍 </div>

													<div class="profile-info-value">
														<i class="icon-map-marker light-orange bigger-110"></i>
														<span class="editable" id="country"><?php echo $res[0]['location']?></span>
														<!-- <span class="editable" id="city">Amsterdam</span> -->
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 年龄 </div>

													<div class="profile-info-value">
														<span class="editable" id="age"><?php echo $res[0]['age']?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 注册时间 </div>

													<div class="profile-info-value">
														<span class="editable" id="signup"><?php echo $res[0]['join']?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 最后一次登陆 </div>

													<div class="profile-info-value">
														<span class="editable" id="login"><?php echo $res[0]['last_online']?></span>
													</div>
												</div>

											</div>

											<div class="space-20"></div>

											<div class="widget-box transparent">
												<div class="widget-header widget-header-small">
													<h4 class="blue smaller">
														<i class="icon-rss orange"></i>
														简历审核
													</h4>

													<div class="widget-toolbar action-buttons">
														<a href="#" data-action="reload">
															<i class="icon-refresh blue"></i>
														</a>

														&nbsp;
														<a href="#" class="pink">
															<i class="icon-trash"></i>
														</a>
													</div>
												</div>

												<div class="widget-body">
													<div class="widget-main padding-8">
														<div id="profile-feed-1" class="profile-feed">
															
															<?php foreach ($req as $key => $val): ?>
															<div class="profile-activity clearfix">
																<div>
																	<span><?php echo $val['true_name']?></span>
																	&nbsp;&nbsp;
																	<a class="user" href="#">应聘职位:</a>
																	<?php echo $val['occupation']?>。
																	&nbsp;&nbsp;
																	<a href="#">应聘公司</a>
																	<?php echo $val['enterprise_name']?>
																	&nbsp;&nbsp;
																	<a href="">曾入职:</a>
																	<?php echo $val['front_enterprise']?>
																	&nbsp;&nbsp;
																	<a href="">是否签约</a>
																	<?php if ($val['status']){ ?>
																		<?php echo "已签约";?>
																	<?php }else{ ?>
																		<?php echo "未签约";?>
																	<?php }?>
																	<div class="time">
																		<i class="icon-time bigger-110">工作经验</i>
																		<?php echo $val['opccupation_time']?>
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a href="#" class="blue" id="details">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>
															<?php endforeach ?>

														</div>
													</div>
												</div>
											</div>

											<div class="hr hr2 hr-double"></div>

											<div class="space-6"></div>

											<div class="center">
												<a href="#" class="btn btn-sm btn-primary">
													<i class="icon-rss bigger-150 middle"></i>
													<span class="bigger-110">View more activities</span>
													<i class="icon-on-right icon-arrow-right"></i>
													</a>
											</div>
										</div>
									</div>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->