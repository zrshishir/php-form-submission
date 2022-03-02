<?php require_once "view/header.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <div>
                    <?php
                    if(isset($_GET['search'])){
                        echo '<a id="btnAddAction" href="index.php" class="btn btn-primary">Back</a>';
                    }
                    ?>
                </div>
                <div>
                    <form action="" method="get">

                            <label style="padding-top: 20px; margin-left: 20px;">User ID</label>
                            <span id="entry_by-info" class="info"></span>
                            <input type="text" name="entry_by" id="entry_by" class="demoInputBox">

                            <label style="padding-top: 20px;padding-left:20px;">From</label>
                            <span id="from_date-info" class="info"></span>
                            <input type="date" name="from_date" id="from_date" class="demoInputBox">

                            <label style="padding-top: 20px; margin-left: 20px;">To</label>
                            <span id="to_date-info" class="info"></span>
                            <input type="date" name="to_date" id="to_date" class="demoInputBox">

                            <input type="submit" name="search" id="btnSearch" value="Search" class="btn btn-primary" />

                        <div id="validity-message">
                            <?php
                            if(isset($validity['resp_code']) && $validity['resp_code'] == 1){
                                echo $validity['message'] . "<br/>";
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-2">
                <div class="mt-2">
                    <a id="btnAddAction" href="index.php?action=buyer-add" class="btn btn-primary">Generate Receipt</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-4">
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Serial No</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Buyer</th>
                    <th scope="col">Receipt</th>
                    <th scope="col">Items</th>
                    <th scope="col">Buyer Email</th>
                    <th scope="col">Buyer Ip</th>
                    <th scope="col">Note</th>
                    <th scope="col">City</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Hash Key</th>
                    <th scope="col">Entry Date</th>
                    <th scope="col">Entry by</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    if (! empty($result)) {
                        foreach ($result as $k => $v) {
                ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $result[$k]["amount"]; ?></td>
                        <td><?php echo $result[$k]["buyer"]; ?></td>
                        <td><?php echo $result[$k]["receipt_id"]; ?></td>
                        <td><?php echo $result[$k]["items"]; ?></td>
                        <td><?php echo $result[$k]["buyer_email"]; ?></td>
                        <td><?php echo $result[$k]["buyer_ip"]; ?></td>
                        <td><?php echo $result[$k]["note"]; ?></td>
                        <td><?php echo $result[$k]["city"]; ?></td>
                        <td><?php echo $result[$k]["phone"]; ?></td>
                        <td><?php echo $result[$k]["hash_key"]; ?></td>
                        <td><?php echo $result[$k]["entry_at"]; ?></td>
                        <td><?php echo $result[$k]["entry_by"]; ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
            <tbody>
        </table>
    </div>
</body>
</html>