<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansDetails extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plant = [
            [
                'raw_title'         => 'Apple_Apple_scrab',
                'raw_description'   =>  'GENERAL PREVENTION MEASURES
                Choose scab-resistant varieties of apple or crabapple trees.
                Rake up and discard any fallen leaves or fruit on a regular basis, and never leave fallen leaves or fruit on the ground over winter. Apple scab fungus overwinters on fallen leaves and fruit.
                Prune your apple and crabapple trees to keep their crowns open so light and air can move through. Dry leaves and fruit help to prevent initial infection.
                Plant your apple and crabapple trees correctly, in full sun and with enough space around each tree, according to their mature size. Shade keeps water from evaporating quickly, and crowded trees are more susceptible to the disease.
                Irrigate your trees in the early morning hours, and don’t use overhead sprays that will wet leaves and fruit. Dry leaves won’t host the fungus.',
                'raw_image'         =>  '',
            ],
            [
                'raw_title'         =>  'Apple_Block_rot',
                'raw_description'   =>  'Prune out dead or diseased branches.
                Pick all dried and shriveled fruits remaining on the trees.
                Remove infected plant material from the area.
                All infected plant parts should be burned, buried or sent to a municipal composting site.
                Be sure to remove the stumps of any apple trees you cut down. Dead stumps can be a source of spores.
                Consider using fungicides only after you’ve used good cultural practices and the disease hasn’t gone away.
                Captan and sulfur products are labeled for control of both scab and black rot. A scab spray program including these chemicals may help prevent the frog-eye leaf spot of black rot, as well as the infection of fruit. These sprays will not control or prevent infection of branches.',
                'raw_image'         =>  '',
            ],
            [
                'raw_title'         =>  'Apple_Block_rot',
                'raw_description'   =>  'The best way to control cedar apple rust is to prevent infection using a mixture of cultural methods and chemical treatments.
                If you see the lesions on the apple leaves or fruit, it is too late to control the fungus. In that case, you should focus on purging infected leaves and fruit from around your tree.
                Don’t plant junipers near rust-susceptible plants, which include both apples and crabapples. Consider resistant apple varieties, such as ‘Freedom,’ ‘Liberty,’ ‘Redfree,’ or ‘William’s Pride.
                And also destroy wild or unwanted apples, crabapples, or junipers, so they won’t infect your apple tree.
                Cultural Controls
                Since the juniper galls are the source of the spores that infect the apple trees, cutting them is a sound strategy if there aren’t too many of them.
                While the spores can travel for miles, most of the ones that could infect your tree are within a few hundred feet.',
                'raw_image'         =>  '',
            ],
            [
                'raw_title'         =>  'Corn_Common_rust',
                'raw_description'   =>  'The best management option is growing corn products with higher levels of tolerance to common rust. General plant tolerance reduces the number and size of pustules and the overall severity of infection.
                Fungicides can effectively control common rust if initial applications are made while there are only a few pustules present per leaf. Use of fungicides is fairly common in sweet corn and seed corn production, but is rarely warranted in field corn because common rust rarely causes economically damaging yield loss in field corn. Scouting each corn field on a regular schedule will help determine if fungicide applications should be considered. If significant levels of common rust are present on the lower leaves prior to silking and cool, humid, or wet weather is likely to occur a fungicide application may be beneficial.',
                'raw_image'         =>  '',
            ],
            [
                'raw_title'         =>  'Corn_Northern_Leaf_Blight',
                'raw_description'   =>  'The primary management strategy to reduce the incidence and severity of NCLB is planting resistant products. Two types of resistance to NCLB exist in corn. Polygenic (multiple gene) resistance is expressed in plants as a reduction in lesion size, lesion number and sporulation, and a longer latent period before conidia are produced. Monogenic (single gene) resistance is controlled by a single dominant gene and can be expressed as chlorotic lesions with decreased sporulation.2 Monogenic and polygenic resistance can act together to reduce the severity of NCLB.',
                'raw_image'         =>  '',
            ],
            [
                'raw_title'         =>  'Potato___Early_blight',
                'raw_description'   =>  'As the spots enlarge, they may cause the entire leaf to yellow and die, but remain on the plant. Dark brown to black spots may also occur on the stems of the plant.
                Treatment of early blight includes prevention by planting potato varieties that are resistant to the disease; late maturing are more resistant than early maturing varieties. Avoid overhead irrigation and allow for sufficient aeration between plants to allow the foliage to dry as quickly as possible. Practice a 2-year crop rotation. That is, do not replant potatoes or other crops in this family for 2 years after a potato crop has been harvested. Keep the potato plants healthy and stress free by providing adequate nutrition and sufficient irrigation, especially later in the growing season after flowering when plants are most susceptible to the disease. Only dig the tubers up when they are completely mature to prevent from damaging them. Any damage done at harvest can additionally facilitate the disease. Remove plant debris and weed hosts at the end of the season to mitigate areas where the disease may overwinter.',
                'raw_image'         =>  '',
            ],
        ];

        DB::table('tbl_privacy_plants_details')->insert($plant);
    }
}
