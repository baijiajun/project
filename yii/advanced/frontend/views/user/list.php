				<script src="/style/jq.js"></script>
				<link rel="stylesheet" href="/user/list/css/main.css" />
				<div class="main-content">
					
					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<div class="table-header">
											用户列表
										</div>
										
										<!-- <div class="statsRow">
									        <div class="wrapper">
									        	<div class="controlB">
									            	<ul>
									            		<li><a href="?r=user/add" title=""><img src="user/list/image/hire-me.png" alt="" /><span>添加用户</span></a></li>
									                	<li><a href="#" title=""><img src="user/list/image/plus.png" alt="" /><span>奶</span></a></li>
									                    <li><a href="#" title=""><img src="user/list/image/database.png" alt="" /><span>个人仓库</span></a></li>
									                    <li><a href="#" title=""><img src="user/list/image/statistics.png" alt="" /><span>面板</span></a></li>
									                    <li><a href="#" title=""><img src="user/list/image/comment.png" alt="" /><span>悄悄话</span></a></li>
									                    <li><a href="#" title=""><img src="user/list/image/order-149.png" alt="" /><span>留言板</span></a></li>
									                </ul>
									                <div class="clear"></div>
									            </div>
									        </div>
									    </div> -->
										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															
														</th>
														<th>姓名</th>
														<th class="hidden-480">邮箱</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															手机号
														</th>
														<th class="hidden-480">最后登陆的时间</th>

														<th>
															操作
														</th>
													</tr>
												</thead>
												

												<tbody>
													
													<?php foreach ($res as $k => $v): ?>												
													<tr din="wode">
														<td class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														
														<td>
															<a href="#"><?=$v['username'];?></a>
														</td>
														<td class="hidden-480"><?=$v['email'];?></td>
														<td><?=$v['phone'];?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?=$v['login_time'];?></span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a href="?r=user/self&uid=<?php echo $v['user_id']?>">
																	<i class="icon-zoom-in bigger-130"></i>
																</a>

																<a href="#">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a href="#" class="del" uid="<?=$v['user_id']?>">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div id="modal-table" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														<span class="white">&times;</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>
												
											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
														<tr>
															<th>Domain</th>
															<th>Price</th>
															<th>Clicks</th>

															<th>
																<i class="icon-time bigger-110"></i>
																Update
															</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>
																<a href="#">ace.com</a>
															</td>
															<td>$45</td>
															<td>3,330</td>
															<td>Feb 12</td>
														</tr>

														<tr>
															<td>
																<a href="#">base.com</a>
															</td>
															<td>$35</td>
															<td>2,595</td>
															<td>Feb 18</td>
														</tr>

														<tr>
															<td>
																<a href="#">max.com</a>
															</td>
															<td>$60</td>
															<td>4,400</td>
															<td>Mar 11</td>
														</tr>

														<tr>
															<td>
																<a href="#">best.com</a>
															</td>
															<td>$75</td>
															<td>6,500</td>
															<td>Apr 03</td>
														</tr>

														<tr>
															<td>
																<a href="#">pro.com</a>
															</td>
															<td>$55</td>
															<td>4,250</td>
															<td>Jan 21</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="modal-footer no-margin-top">
												<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
													<i class="icon-remove"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="icon-double-angle-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="icon-double-angle-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
<script>
	$(function(){
		$(document).on('click','.del',function(){
			var _this=$(this);
			var uid = _this.attr('uid');
			$.ajax({
			   type: "POST",
			   url: "?r=user/del",
			   data: {uid:uid},
			   success: function(msg){
			     if (msg) {
			     	alert('删除成功');
			     	_this.parent().parent().parent().remove();
			     }else{
			     	alert('删除失败');
			     }
			   }
			})

		})
	})
</script>