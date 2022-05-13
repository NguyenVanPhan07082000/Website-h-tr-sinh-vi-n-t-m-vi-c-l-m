<?php
    use Illuminate\Support\Facades\DB;
    $listjob = DB::select('SELECT * FROM job,company WHERE job.idCompany = company.idCompany ORDER BY Ngaycapnhat DESC LIMIT ?', [6]);
    if($listjob){
        foreach($listjob as $key => $jb):
?>
<div style="
margin-top: 1rem;
margin-left: 1rem;
margin-right: 1rem;
text-decoration: none;
padding: .5rem 1rem;
display: inline-block;
border-radius: 1rem;
position: relative;
background-color: white;
width: 100%; margin-left: 5rem;">
    <div style="width: calc(3*((100% - 4*6rem)/4)+ 2*6rem); color: #000;margin-left: 5rem;">
        <p style="overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        margin-top: -1rem;
        width: 30rem;
        font-size: 1.8rem;">
            <?php echo $jb->Nganhnghe; ?>
        </p>
        <p style="color: #888888;
        font-size: 1.4rem;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        width: 30rem;">
            <?php echo $jb->Tencongty; ?>
        </p>
        <p style="color: rgba(0, 128, 0, 0.8);
        font-size: 1.4rem;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        width: 30rem;">
            $ Lương: <?php echo $jb->Luong; ?>
        </p>
        <p style="overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        width: 30rem;
        color: #888888;
        font-size: 1.4rem;">
            Địa chỉ: <?php echo $jb->Diachi; ?>
        </p>
        <p style="overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        width: 30rem;
        color: #888888;
        font-size: 1.4rem;">
            Quyền Lợi: <?php echo $jb->Quyenloi; ?>
        </p>
    </div>
</div>
<?php
    endforeach;}
?>
