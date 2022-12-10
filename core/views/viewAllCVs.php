<div class="container">
  <h1 class="py-2">View all CVs</h1>
  <p>This page lists all CVs.</p>
  <!-- <div class="input-group">
    <input id="myInput" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
    <button type="button" class="btn btn-outline-primary">Search</button>
  </div> -->
  <table class="table table-responsive-md table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">CV</th>
        <th scope="col">Owner</th>
        <th scope="col">View</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($IDs); $i++) {
        echo '<tr>
          <td>' . $names[$i] . '</td>
          <td>' . $owners[$i] . '</td>
          <td><a href="cv/view/' . $IDs[$i] . '"><u>View</u></a></td>
          <td><a href="cv/edit/' . $IDs[$i] . '"><u>Edit</u></a></td>
        </tr>';
      }
      ?>
    </tbody>
  </table>
  <a class="btn btn-primary m-1" href="cv/create">Create your CV</a>
</div>


<div class="content-block">
				<div class="section-full bg-white browse-job content-inner-2">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="m-b30">
									<input type="text" class="form-control" placeholder="Search freelancer services">
								</div>
								<ul class="post-job-bx">
									<li>
										<a href="#">
											<div class="d-flex m-b30">
												<div class="job-post-company">
													<span><img src="images/testimonials/pic1.jpg" /></span>
												</div>
												<div class="job-post-info">
													<h4>Digital Marketing Executive</h4>
													<ul>
														<li><i class="fa fa-map-marker"></i> New York</li>
														<li><i class="fa fa-usd"></i> Full Time</li>
														<li><i class="fa fa-clock-o"></i> Published 11 months ago</li>
													</ul>
												</div>
											</div>
											<div class="d-flex">
												<div class="job-time mr-auto">
													<span>Javascript</span>
													<span>CSS</span>
													<span>HTML</span>
													<span>Bootstrap</span>
												</div>
												<div class="salary-bx">
													<span>$45 Per Hour</span>
												</div>
											</div>
											<span class="post-like fa fa-heart-o"></span>
										</a>
									</li>
								</ul>
								<div class="pagination-bx m-t30">
									<ul class="pagination">
										<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>