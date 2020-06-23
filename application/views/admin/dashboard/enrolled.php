<section class="main-content container">
        <div class="user-listing-box">
            <?php foreach($users as $u) { ?>
            <div class="listing">
                <h4><?php echo $u['first_name'];?></h4>
                <div class="listing-left">
                    <h2>84<span>%</span></h2>
                </div>
                   <div class="listing-right">
                    <h5>124</h5>
                    <h5>1020</h5>
                </div>
            </div>
            <?php } ?>
<!--            <div class="listing">
                <h4>Demo 2</h4>
                <div class="listing-left">
                    <h2>83<span>%</span></h2>
                </div>
                   <div class="listing-right">
                    <h5>124</h5>
                    <h5>1020</h5>
                </div>
            </div>
            <div class="listing">
                <h4>Demo 3</h4>
                <div class="listing-left">
                    <h2>82<span>%</span></h2>
                </div>
                   <div class="listing-right">
                    <h5>124</h5>
                    <h5>1020</h5>
                </div>
            </div>
            <div class="listing">
                <h4>Demo 4</h4>
                <div class="listing-left">
                    <h2>81<span>%</span></h2>
                </div>
                   <div class="listing-right">
                    <h5>124</h5>
                    <h5>1020</h5>
                </div>
            </div>
            <div class="listing">
                <h4>Demo 4</h4>
                <div class="listing-left">
                    <h2>81<span>%</span></h2>
                </div>
                   <div class="listing-right">
                    <h5>124</h5>
                    <h5>1020</h5>
                </div>
            </div>
            <div class="listing">
                <h4>Demo 4</h4>
                <div class="listing-left">
                    <h2>81<span>%</span></h2>
                </div>
                   <div class="listing-right">
                    <h5>124</h5>
                    <h5>1020</h5>
                </div>
            </div>
            <div class="listing">
                <h4>Demo 4</h4>
                <div class="listing-left">
                    <h2>81<span>%</span></h2>
                </div>
                   <div class="listing-right">
                    <h5>124</h5>
                    <h5>1020</h5>
                </div>
            </div>
            <div class="listing">
                <h4>Demo 4</h4>
                <div class="listing-left">
                    <h2>81<span>%</span></h2>
                </div>
                   <div class="listing-right">
                    <h5>124</h5>
                    <h5>1020</h5>
                </div>
            </div>-->
        </div>
    
<style>
.listing {
    background: #f46823;
    display: inline-block;
    width: 18.93%;
    margin: 0 1% 0 0;
    margin-bottom: 1%;
}
.listing > h4 {
    background: #d25e2a;
    padding: 10px 15px;
    font-size: 16px;
    color: #fff;
    font-weight: 500;
}
.listing:nth-child(5n){
     margin: 0;
     margin-bottom: 1%;
}
.listing:nth-child(2n){
 background: #8cc641;
}
.listing:nth-child(2n) h4{
 background: #7ab145;
}

.listing:nth-child(3n){
 background: #70cddd;
}
.listing:nth-child(3n) h4{
 background: #64b1bd;
}
.listing:nth-child(4n){
 background: #666667;
}
.listing:nth-child(4n) h4{
 background: #5c5d5e;
}
.listing-left {
    display: inline-block;
    width: 65%;
    padding: 30px 15px 10px;
}
.listing-right {
    display: inline-block;
    width: 33%;
    vertical-align: top;
    padding-top: 15px;
    text-align: right;
    padding-right: 15px;
}
.listing-left h2 {
    color: #fff;
    font-size: 50px;
        font-weight: 300;
}
.listing-left h2 span{
    color: #fff;
    font-size: 24px;
    padding-left: 5px;
}
.listing-right h5 {
    color: #000;
    font-size: 14px;
    font-weight: 500;
}
</style>
</section>