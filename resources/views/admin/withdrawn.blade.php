@extends('layouts.admin_app')

@section('content')
<body>
	<div id="wrapper">
		@include('sections.d_header')
		@include('sections.sidebar')
	<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          		@if (session('error-status'))
					<div class="alert alert-danger alert-dismissable">
					    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					    <div class="container-fluid">
					      <center><b>Error:</b> {{ session('error-status') }}</center>
					    </div>
					</div>
				@endif
              <div class="row">
              		<div class="col-md-12">
                        <div class="col-md-12">
	              			<div class="panel panel-default">
								<div class="panel-heading">Statistics</div>
								<div class="panel-body">
									<div class="col-md-12">
										<table class="table table-condensed">
											<tr><td><b>Withdrawals Count</b></td><td><b>{{ $paid_users_count }}</b></td></tr>

											<tr class="success"><td><b>Total Paid Amount</b></td><td><b>&#8358;{{ number_format($paid_withdrawals) }}</b></td></tr>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">Withdrawn Transactions</div>
								<div class="panel-body">
									<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>ID</th>
	                                            <th>Amount</th>
												<th>Detail</th>
												<th>Date</th>
	                                            <th>Status</th>
											</tr>
										</thead>
										<tbody>
											@forelse($transactions as $index => $t)
											<tr  @if($t->suspended) class="success" @elseif(!$t->activated) class="warning" @endif>
												<td class="col-md-2">{{ $index+1 }}</td>
												<td class="col-md-2"><a href="{{ url('/admin/user/'.$t->id) }}">{{ $t->username or '' }}</a></td>
												<td  class="col-md-1">&#8358;{{ number_format($t->withamt, 2) }} <br>

												</td>
	                                            <td class="col-md-3">
													<b>Name:</b> <a href="/admin/user/{{ $t->id }} ">{{ $t->name or '' }}</a> <br />
		                                            <b>Bank:</b> {{ $t->bank or '' }} <br />
																								  <b>Account No:</b> {{ $t->accountno or '' }} <br />
		                                            <b>Phone:</b> {{ $t->phone or '' }}
												</td>
												<td class="col-md-2">{{ $t->updated_at->toDayDateTimeString() }}</td>
	                                            <td class="col-md-2"><b>
													@if($t->suspended)
													<span class="label label-success">Paid</span>
													@else
													<span class="label label-primary">Payout Requested</span>
													@endif
													</b>
												</td>
											</tr>
											@empty
											<tr>
												<td colspan="3"><center><i>No Transactions</i></center></td>
											</tr>
											@endforelse
										</tbody>
									</table>
									</div>
									{{ $transactions->links() }}
								</div>
						</div>
                    </div>
              </div><!-- /row -->
          </div><!-- /col-lg-9 END SECTION MIDDLE -->
    </body>
@endsection
