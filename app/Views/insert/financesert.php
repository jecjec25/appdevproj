<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/finance">
    <button type="sumbit">back</button>
    </form>
    <form action="/insertfinance" method ="post">
        <label>Name: </label>
    <input type="text" name="FiscalYear" placeholder ="Fiscal Year">    
    <input type="text" name ="AnnualRegularIncome" placeholder ="Annual Regular Income">
    <input type="text" name="Change" placeholder ="Year">
    <button type ="submit">save</button>
    </form>
    <form method="post">
                                    <div class="tab-content">
                                    <div id="approved" class="tab-pane active in">
                                        <table id="table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Fiscal Year</th>
                                                    <th>Annual Regular Income</th>
                                                    <th>Change</th>
                                            </tr>
                                            </thead>
                                          <tbody>
                                          <?php foreach ($fin as $St): ?>
                                            <th><?= $St['FiscalYear'];?></th>
                                            <th><?= $St['AnnualRegularIncome']?></th>
                                            <th><?=  $St['Change'];  echo('%')?></th>
              
                                            </tbody>
                                            <?php endforeach;?>
                                        </table>

                                        </div>

                                      <div id="disapproved" class="tab-pane">
                                        <table id="table1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Resident Name</th>
                                                    <th>Findings</th>
                                                    <th>Purpose</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>

                                        </div>


                                        </div>
                                

                                    </form>
</body>
</html>