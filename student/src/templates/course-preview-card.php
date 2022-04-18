<div class="card__item">
    <button>
        <img
        id="courseThumbanil" 
        src="<?php echo verifyImage($course['thumbnail'],'course');?>"
        alt=""
        />
        <span><?php echo $course['type'];?></span>
        <p><?php echo $course['title'];?></p>
        <input type="hidden"  id="courseId" value="<?php echo $course['id'];?>"/>
        <input type="hidden"  id="courseDescription" value="<?php echo $course['description'];?>"/>
        <input type="hidden"  id="courseLevel" value="<?php echo $course['level'];?>"/>

    </button>
</div>