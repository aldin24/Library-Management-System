<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Revoke Suspension</h3>
                    </div>
                </div>
                <div>
                    <form>
                        <?php if( $users ) { ?>
                        <?= form_open('/librarian/revokesuspensionaction') ?>
                            <div class="form-group">
                                <label for="user">User</label>
                                <select name="user" id="user" class="form-control">
						<?php foreach( $users as $user ) : ?>
							<option value="<?= $user['id'] ?>"><?= $user['full_name']." (".$user['name'].")" ?></option>
						<?php endforeach ?>
					</select>
                            </div>
                            <div style="color:#f00 !important; font-size:14px !important; font-weight:bold !important;">
                                <?= validation_errors() ?>
                            </div>
                            <div align="center">
                                <button class="btn btn-success" style="width: 30%;">
						<span class="glyphicon glyphicon-saved"></span>&nbsp;
						Revoke Suspension
					</button>
                            </div>
                    </form>
                    <?php } else { ?>
                    <div align="center">
                        <h4> No Suspeded Users! </h4>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        <div style="height:50px;"> &nbsp; </div>
    </div>
</section>