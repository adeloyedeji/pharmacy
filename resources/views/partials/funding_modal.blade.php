<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Wallet Funding</h5>

            </div>
            <div class="modal-body">
                <form action="{{route('pay')}}" method="POST">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12">


                            <div class="form-group label-floating">
                                <div class="input-group">
                                <label class="control-label">Amount (EX: 1000)</label>
                                <input type="text" name="amount" class="form-control">
                                <span class="input-group-btn">
                                        <button class="btn btn-success" type="submit">Fund</button>
                                </span>
                                </div>
                                <input type="hidden" name="email"  value="ifyinbox@gmail.com">
                                <input type="hidden" name="metadata" value="{{ json_encode(['custom_field' => ['type' => 'funding']]) }}" >
                            </div>

                        </div>

                        {{--<div class="col-md-6">--}}

                            {{--<button type="submit" class="btn btn-primary">Fund</button>--}}
                            {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                        {{--</div>--}}
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <p class="pull-left">* You may be redirected to make payment!</p>
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">&times;</button>
            </div>
        </div>
    </div>
</div>