<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">TM Prepago</h3>
      </div>
      <div class="panel-body">

        <table class="table table-bordered">
          <tr>
            <th>Fecha</th>
            <th>08-09</th>
            <th>09-10</th>
            <th>10-11</th>
            <th>11-12</th>
            <th>12-13</th>
            <th>13-14</th>
            <th>14-15</th>
            <th>15-16</th>
            <th>16-17</th>
            <th>17-18</th>
            <th>18-19</th>
            <th>19-20</th>
            <th>20-21</th>
            <th>21-22</th>
          </tr>
          <?php foreach($fechas as  $key => $value): ?>
          <?php if(array_key_exists($key,$env)): ?>
          <tr>
            <td><?php echo e($key); ?></td>
            <?php if(array_key_exists("8",$env[$key])): ?>
            <td><?php echo e($env[$key]["8"]); ?> </td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("9",$env[$key])): ?>
            <td><?php echo e($env[$key]["9"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("10",$env[$key])): ?>
            <td><?php echo e($env[$key]["10"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("11",$env[$key])): ?>
            <td><?php echo e($env[$key]["11"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("12",$env[$key])): ?>
            <td><?php echo e($env[$key]["12"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("13",$env[$key])): ?>
            <td><?php echo e($env[$key]["13"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("14",$env[$key])): ?>
            <td><?php echo e($env[$key]["14"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("15",$env[$key])): ?>
            <td><?php echo e($env[$key]["15"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("16",$env[$key])): ?>
            <td><?php echo e($env[$key]["16"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("17",$env[$key])): ?>
            <td><?php echo e($env[$key]["17"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("18",$env[$key])): ?>
            <td><?php echo e($env[$key]["18"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("19",$env[$key])): ?>
            <td><?php echo e($env[$key]["19"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("20",$env[$key])): ?>
            <td><?php echo e($env[$key]["20"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("21",$env[$key])): ?>
            <td><?php echo e($env[$key]["21"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
          </tr>
          <?php endif; ?>
          <?php endforeach; ?>

        </table>

      </div>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">TM Pospago</h3>
      </div>
      <div class="panel-body">

        <table class="table table-bordered">
          <tr>
            <th>Fecha</th>
            <th>08-09</th>
            <th>09-10</th>
            <th>10-11</th>
            <th>11-12</th>
            <th>12-13</th>
            <th>13-14</th>
            <th>14-15</th>
            <th>15-16</th>
            <th>16-17</th>
            <th>17-18</th>
            <th>18-19</th>
            <th>19-20</th>
            <th>20-21</th>
            <th>21-22</th>
          </tr>
          <?php foreach($fechas as  $key => $value): ?>
          <?php if(array_key_exists($key,$env2)): ?>
          <tr>
            <td><?php echo e($key); ?></td>
            <?php if(array_key_exists("8",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["8"]); ?> </td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("9",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["9"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("10",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["10"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("11",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["11"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("12",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["12"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("13",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["13"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("14",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["14"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("15",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["15"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("16",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["16"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("17",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["17"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("18",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["18"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("19",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["19"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("20",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["20"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("21",$env2[$key])): ?>
            <td><?php echo e($env2[$key]["21"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
          </tr>
          <?php endif; ?>
          <?php endforeach; ?>

        </table>

      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Banamex</h3>
      </div>
      <div class="panel-body">

        <table class="table table-bordered">
          <tr>
            <th>Fecha</th>
            <th>08-09</th>
            <th>09-10</th>
            <th>10-11</th>
            <th>11-12</th>
            <th>12-13</th>
            <th>13-14</th>
            <th>14-15</th>
            <th>15-16</th>
            <th>16-17</th>
            <th>17-18</th>
            <th>18-19</th>
            <th>19-20</th>
            <th>20-21</th>
            <th>21-22</th>
          </tr>
          <?php foreach($fechas as  $key => $value): ?>
          <?php if(array_key_exists($key,$env3)): ?>
          <tr>
            <td><?php echo e($key); ?></td>
            <?php if(array_key_exists("8",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["8"]); ?> </td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("9",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["9"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("10",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["10"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("11",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["11"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("12",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["12"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("13",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["13"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("14",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["14"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("15",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["15"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("16",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["16"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("17",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["17"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("18",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["18"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("19",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["19"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("20",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["20"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("21",$env3[$key])): ?>
            <td><?php echo e($env3[$key]["21"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
          </tr>
          <?php endif; ?>
          <?php endforeach; ?>

        </table>

      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Inbursa</h3>
      </div>
      <div class="panel-body">

        <table class="table table-bordered">
          <tr>
            <th>Fecha</th>
            <th>08-09</th>
            <th>09-10</th>
            <th>10-11</th>
            <th>11-12</th>
            <th>12-13</th>
            <th>13-14</th>
            <th>14-15</th>
            <th>15-16</th>
            <th>16-17</th>
            <th>17-18</th>
            <th>18-19</th>
            <th>19-20</th>
            <th>20-21</th>
            <th>21-22</th>
          </tr>
          <?php foreach($fechas as  $key => $value): ?>
          <?php if(array_key_exists($key,$env4)): ?>
          <tr>
            <td><?php echo e($key); ?></td>
            <?php if(array_key_exists("8",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["8"]); ?> </td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("9",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["9"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("10",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["10"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("11",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["11"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("12",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["12"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("13",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["13"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("14",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["14"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("15",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["15"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("16",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["16"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("17",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["17"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("18",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["18"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("19",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["19"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("20",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["20"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
            <?php if(array_key_exists("21",$env4[$key])): ?>
            <td><?php echo e($env4[$key]["21"]); ?></td>
            <?php else: ?>
            <td>0</td>
            <?php endif; ?>
          </tr>
          <?php endif; ?>
          <?php endforeach; ?>

        </table>

      </div>
    </div>


  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.rep.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>