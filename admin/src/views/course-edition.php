    <!-- recursos guardados en la base de datos -->
<div class="course__body__container__divided">
    <div class="course__container__up"> 
        <?php include("../forms/edit-course-form.php"); ?>  
    </div>

    <?php if(isset($resources) ){ ?>
        <div class="course__container__bottom">
            <h3>Resources</h3>
            <div class="resource__container__divided">
                <?php include("../forms/edit-resource-form.php"); ?>  
                <div id="resourcesCardsContainer" class="cards__container resource__card__list">  
                    <?php foreach($resources as $resource){ ?>
                    <div class="card__item">
                        <button>
                            <img
                            src= "<?php echo defaultResourcePreview($resource['type']);?>"
                            alt=""
                            />
                            <span><?php echo $resource['type'];?></span>
                            <p><?php echo $resource['name']?></p>
                        </button>
                    </div>
                    <?php } ?>
                </div>
                    
            </div>
        </div>
    <?php } ?>
</div>