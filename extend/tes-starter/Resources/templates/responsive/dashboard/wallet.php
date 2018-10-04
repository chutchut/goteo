<?php $this->layout('dashboard/layout') ?>

<?php $this->section('dashboard-content') ?>

<div class="dashboard-content">
  <div class="inner-container">
    <div class="user-pool">
        <h1><?= $this->text('dashboard-my-wallet-available', tes_format($this->pool->getAmount())) ?></h2>

      <div class="row">
        <div class="col-xs-7 text-right">
            <a href="/discover"  class="btn btn-lg btn-pink"><?= $this->text('dashboard-my-wallet-contribute-button') ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="dashboard-content cyan">
  <div class="inner-container">
      <div class="projects-container">
        <h2><?= $this->text('profile-suggest-projects-interest') ?></h2>
        <?= $this->insert('dashboard/partials/projects_interests', [
            'projects' => $this->projects_suggestion,
            'total' => $this->projects_suggestion_total,
            'interests' => $this->interests,
            'auto_update' => '/dashboard/ajax/projects/interests',
            'limit' => $this->limit
            ]) ?>
      </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="poolModal" tabindex="-1" role="dialog" aria-labelledby="poolModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="poolModalLabel"><?= $this->text('invest-modal-pool-title') ?></h4>
      </div>
      <div class="modal-body">
        <?= $this->text('dashboard-my-wallet-modal-pool-info') ?>
      </div>
    </div>
  </div>
</div>

<?php $this->replace() ?>

