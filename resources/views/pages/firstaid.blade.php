@extends('layouts.app')
@section('content')

<div class="firstaid-tips py-5">
    <div class="aid-box">
        <h1 class="aid-title text-center pb-5">First Aid Tips</h1>
        <div class="row pb-3">
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fa-solid fa-cloud-bolt"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Thunderstorm</h4>
                        <p>A violent short-lived weather disturbance that is almost always associated with lightning, dense clouds, heavy rain, and strong gusty winds.</p>
                        
                    </div>
                    <a href="#" type="button" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#thunderstorm" class="btn mb-1 m-auto w-auto">Read more</a>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fa-solid fa-hill-rockslide"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Landslide</h4>
                        <p>A landslide is defined as the movement of a mass of rock, debris, or earth down a slope</p>
                        
                    </div>
                    <a href="#" type="button" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#landslide" class="btn mb-1 m-auto w-auto">Read more</a>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fa-solid fa-house-tsunami"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Tsunami</h4>
                        <p>Thus, the Japanese word "tsunami", meaning "harbor wave" is the correct, official and all-inclusive term.</p>
                        
                    </div>
                    <a href="#" type="button" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#tsunami" class="btn mb-1 m-auto w-auto">Read more</a>
                </div>
            </div><div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fa-solid fa-house-chimney-crack"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Earthquake</h4>
                        <p>A sudden and violent shaking of the ground, sometimes causing great destruction, as a result of movements within the earth's crust.</p>
                        
                    </div>
                    <a href="#" type="button" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#earthquake" class="btn mb-1 m-auto w-auto">Read more</a>
                </div>
            </div><div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fa-solid fa-volcano"></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Volcanic Eruption</h4>
                        <p>Volcanic eruptions can be quite calm and effusive, or they can be explosive.</p>
                        
                    </div>
                    <a href="#" type="button" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#vol-eruption" class="btn mb-1 m-auto w-auto">Read more</a>
                </div>
            </div><div class="col-lg-4 mb-3">
                <div class="card text-center py-3">
                    <div class="card-body">
                        <div class="circle">
                            <span><i class="fa-solid fa-tornado"></i></i></span>
                        </div>
                        <h4 class="font-weight-bold pb-2">Tornado</h4>
                        <p>A mobile, destructive vortex of violently rotating winds having the appearance of a funnel-shaped cloud and advancing beneath a large storm system.</p>
    
                    </div>
                    <a href="#" type="button" data-bs-toggle="modal" data-bs-keyboard="false" data-bs-target="#tornado" class="btn mb-1 m-auto w-auto">Read more</a>
                </div>
            </div>
        </div>

    </div>
    
</div>

{{-- modal --}}

<div class="modal fade" id="thunderstorm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1>THUNDERSTORM PREPAREDNESS</h1>
          <a href="/"><img src={{asset('images/logo.png')}} alt="Logo" id="logos"></a>
        </div>
        <div class="modal-body">
          <h4>BEFORE LIGHTNING STRIKES:</h4>
          <p>Keep an eye on the sky. Look for darkening skies, flushes of light, or increasing wind.</p>
          <p>Listen for the sound of thunder.</p>
          <p>If you can hear thunder, you are close enough to the storm to be struck by lightning.</p>
          <p>Go to safe shelter immediately! Listen to NOAA Weather Radio, commercial radio, or television for the latest weather forecasts.</p>
          <h4>WHEN A STORM APPROACHES:</h4>
          <p>Find shelter in a building or car.</p>
          <p>Keep car windows closed and avoid convertibles</p>
          <p>Telephone lines and metal pipes can conduct electricity.</p>
          <p>Unplug appliances.Avoid using the telephone or any electrical appliances.</p>
          <p>Avoid taking a bath or shower, or running water for any other purpose.</p>
          <p>Turn off the air conditioner.</p>
          <p>Power surges from lightning can overload the compressor, resulting in a costly repair job!</p>
          <p>Draw blinds and shades over windows.</p>
          <p>If windows break due to objects blown by the wind, the shades will prevent glass from shattering into your home.</p>
          <h4>IF SOMEONE IS STRUCK BY LIGHTNING:</h4>
          <p>People struck by lightning carry no electrical charge and can be handled safely.</p>
          <p>Get someone to dial 9-1-1 or your local Emergency Medical Services (EMS) number.</p>
          <p>The injured person has received an electrical shock and may be burned, both where they were struck and where the electricity left their body. Check for burns in both places.</p>
          <p>Give first aid. If breathing has stopped, begin rescue breathing. If the heart has stopped beating, a trained person should give CPR.</p>
          <h5>If you're not trained in CPR or worried about giving rescue breaths, then provide hands-only CPR. That means uninterrupted chest compressions of 100 to 120 a minute until paramedics arrive. You don't need to try rescue breathing.</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="landslide" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1>LANDSLIDE PREPAREDNESS</h1>
          <a href="/"><img src={{asset('images/logo.png')}} alt="Logo" id="logos"></a>
        </div>
        <div class="modal-body">
          <h4>WHAT TO DO BEFORE LANDSLIDE:</h4>
          <P>Do not build near steep slopes, close to mountain edges, near drainage ways, or natural erosion valleys.</P>
          <P>Contact local officials, state geological surveys or departments of natural resources, and university departments of geology. Landslides occur where they have before, and in identifiable hazard locations. Ask for information on landslides in your area, specific information on areas vulnerable to landslides, and request a professional referral for a very detailed site analysis of your property, and corrective measures you can take, if necessary.</P>
          <P>Watch the patterns of storm-water drainage near your home, and note the places where runoff water converges, increasing flow in channels. These are areas to avoid during a storm.</P>
          <h4>WHAT TO DO DURING LANDSLIDE:</h4>
          <P>Stay alert and awake. Many debris-flow fatalities occur when people are sleeping. Listen to a NOAA Weather Radio or portable, battery-powered radio or television for warnings of intense rainfall. Be aware that intense, short bursts of rain may be particularly dangerous, especially after longer periods of heavy rainfall and damp weather.</P>
          <P>If you are in areas susceptible to landslides and debris flows, consider leaving if it is safe to do so. Remember that driving during an intense storm can be hazardous. If you remain at home, move to a second story if possible. Staying out of the path of a landslide or debris flow saves lives.</P>
          <P>Listen for any unusual sounds that might indicate moving debris, such as trees cracking or boulders knocking together. A trickle of flowing or falling mud or debris may precede larger landslides. Moving debris can flow quickly and sometimes without warning.</P>
          <P>If you are near a stream or channel, be alert for any sudden increase or decrease in water flow and for a change from clear to muddy water. Such changes may indicate landslide activity upstream, so be prepared to move quickly. Don't delay! Save yourself, not your belongings.</P>
          <h4>WHAT TO DO IF SOMEONE CAUGHT IN A LANDSLIDE:</h4>
          <P>Stay away from the slide area. There may be danger of additional slides.</P>
          <P>Listen to local radio or television stations for the latest emergency information.</P>
          <P>Get someone to dial 9-1-1 or your local Emergency Medical Services (EMS) number.</P>
          <P>Watch for flooding, which may occur after a landslide or debris flow. Floods sometimes follow landslides and debris flows because they may both be started by the same event.</P>
          <P>Check for injured and trapped persons near the slide, without entering the direct slide area. Direct rescuers to their locations.</P>
          <P>Help a neighbor who may require special assistance - infants, elderly people, and people with disabilities. Elderly people and people with disabilities may require additional assistance. People who care for them or who have large families may need additional assistance in emergency situations.</P>
          <h5>If you're not trained in CPR or worried about giving rescue breaths, then provide hands-only CPR. That means uninterrupted chest compressions of 100 to 120 a minute until paramedics arrive. You don't need to try rescue breathing.</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="tsunami" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1>TSUNAMI PREPAREDNESS</h1>
          <a href="/"><img src={{asset('images/logo.png')}} alt="Logo" id="logos"></a>
        </div>
        <div class="modal-body">
          <h4>BEFORE A TSUNAMI:</h4>
          <p>Find out if your home is in a danger area by knowing the distance it is from the coast. To escape a tsunami, go as high and as far as you can – ideally to a spot 100 feet above sea level or 2 miles away.</p>
          <p>If you live in a low-lying area – for example near to the beach – learn the quickest way to get to high ground. A safe area would be at least 30m (~100feet) above sea level and 3km (~ 2miles) inland. Teach and practice the evacuation plan with all family members.</p>
          <p>Discuss tsunamis with your family and friends. Everyone should know what to do in case all members are not together during an event.</p>
          <p>Emergency items such as canned foods, medication, flashlights, battery-operated radios, bottled water and First Aid kits should be readily available and working properly.</p>
          <p>Ensure that all family members know how to recognize natural tsunami warning signs as there may not be enough time for authorities to issue an official tsunami warning.</p>
          <h4>DURING A TSUNAMI:</h4>
          <p>When the shaking stops, gather members of your household and review your evacuation plan. A tsunami may be coming within minutes.</p>
          <p>Use a NOAA Weather Radio or stay tuned to a Coast Guard emergency frequency station, or a local radio or television station for updated emergency information.</p>
          <p>If you hear an official tsunami warning or detect signs of a tsunami, evacuate at once. A tsunami warning is issued when authorities are certain that a tsunami threat exists, and there may be little time to get out.</p>
          <p>Avoid downed power lines and stay away from buildings and bridges from which heavy objects might fall during an aftershock.</p>
          <p>Stay away until local officials tell you it is safe. A tsunami is a series of waves that may continue for hours. Do not assume that after one wave the danger is over. The next wave may be larger than the first one.</p>
          <p>Avoid downed power lines and stay away from buildings and bridges from which heavy objects might fall during an aftershock.</p>
          <h4>WHAT TO DO IF YOUR CAUGHT BY TSUNAMI WAVES:</h4>
          <P>Look for something sturdy like a tree, a door, or a life raft. Grab the object and hold on tightly while you get carried by the waves.</P>
          <P>Though it may be difficult at the moment, try your best not to swallow any of the water. Tsunamis can pick up chemicals and waste that can be harmful to your health.</P>
          <P>Steer your boat towards the open sea, facing the waves, and get as far out as you can. Never return to port if a tsunami warning is issued in the area.</P>
          <P>Tsunami activity causes dangerous currents and water levels near the shoreline, which can capsize your boat.</P>
          <P>If you’re already docked in a harbor, get out of your boat and go inland to safety as quickly as possible.</P>
          <h5>If you're not trained in CPR or worried about giving rescue breaths, then provide hands-only CPR. That means uninterrupted chest compressions of 100 to 120 a minute until paramedics arrive. You don't need to try rescue breathing.</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="earthquake" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1>EARTHQUAKE PREPAREDNESS</h1>
          <a href="/"><img src={{asset('images/logo.png')}} alt="Logo" id="logos"></a>
        </div>
        <div class="modal-body">
          <h4>BEFORE AN EARTHQUAKE:</h4>
          <P>Make an Emergency Plan: Create a family emergency communications plan that has an out-of-state contact. Plan where to meet if you get separated. Make a supply kit that includes enough food and water for several days, a flashlight, a fire extinguisher and a whistle.</P>
          <P>Being prepared allows you to avoid unnecessary excursions and to address minor medical issues at home, alleviating the burden on urgent care centers and hospitals.</P>
          <P>Remember that not everyone can afford to respond by stocking up on necessities. For those who can afford it, make essential purchases and slowly build up supplies.</P>
          <P>Protect Your Home: Secure heavy items in your home like bookcases, refrigerators, water heaters, televisions and objects that hang on walls. Store heavy and breakable objects on low shelves.</P>
          <P>Consider making improvements to your building to fix structural issues that could cause your building to collapse during an earthquake.</P>
          <P>Consider obtaining an earthquake insurance policy. A standard homeowner’s insurance policy does not cover earthquake damage.</P>
          <h4>DURING AN EARTHQUAKE:</h4>
          <P>If you are in a car, pull over and stop. Set your parking brake. If you are in bed, turn face down and cover your head and neck with a pillow. If you are outdoors, stay outdoors away from buildings. If you are inside, stay and do not run outside and avoid doorways.</P>
          <p><b>Drop (or Lock)-</b>Wherever you are, drop down to your hands and knees and hold onto something sturdy. If you’re using a wheelchair or walker with a seat, make sure your wheels are locked and remain seated until the shaking stops.</P>
          <p><b>Hold On-</b>If you are under a table or desk, hold on with one hand and be ready to move with it if it moves. If seated and unable to drop to the floor, bend forward, cover your head with your arms and hold on to your neck with both hands.</p>
          <p><b>Cover-</b>Cover your head and neck with your arms. If a sturdy table or desk is nearby, crawl underneath it for shelter. If no shelter is nearby, crawl next to an interior wall (away from windows). Crawl only if you can reach better cover without going through an area with more debris. Stay on your knees or bent over to protect vital organs.</p>
          <h4>AFTER AN EARTHQUAKE:</h4>
          <p>Check for injuries, check your first aid kit or the front pages of your telephone book for detailed instructions on first aid measures.</p>
          <p>Do not move seriously injured persons unless they are in immediate danger of further injury.</p>
          <p>Cover injured persons with blankets or additional clothing to keep them warm</p>
          <p>Get medical help for serious injuries. Carefully check children or others needing special assistance.</p>
          <p>If a person is bleeding, put direct pressure on the wound. Use clean gauze or cloth, if available.</p>
          <p>If a person is not breathing, administer rescue breathing.If a person has no pulse, begin CPR (cardiopulmonary resuscitation).</p>
          <h5>If you're not trained in CPR or worried about giving rescue breaths, then provide hands-only CPR. That means uninterrupted chest compressions of 100 to 120 a minute until paramedics arrive. You don't need to try rescue breathing.</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="vol-eruption" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1>VOLCANIC ERUPTION PREPAREDNESS</h1>
          <a href="/"><img src={{asset('images/logo.png')}} alt="Logo" id="logos"></a>
        </div>
        <div class="modal-body">
          <h4>BEFORE VOLCANIC ERUPTION:</h4>
          <p>Be prepared either to shelter or to evacuate. Develop an evacuation plan and a sheltering plan for yourself, your family, and others in your household. Review the plans and make sure that everyone understands them.</p>
          <p>Exposure to ash can harm your health, particularly the respiratory (breathing) tract. To protect yourself while you are outdoors or while you are cleaning up ash that has gotten indoors, use an N-95 disposable respirator (also known as an “air purifying respirator”). N-95 respirators can be purchased at businesses such as hardware stores. It is important to follow directions for proper use of this respirator. For more information, see NIOSH-Approved Disposable Particulate Respirators (Filtering Facepieces) . If you don’t have an N-95 respirator, you can protect yourself by using a nuisance dust mask as a last resort, but you should stay outdoors for only short periods while dust is falling. Nuisance dust masks can provide comfort and relief from exposure to relatively non-hazardous contaminants such as pollen, but they do not offer as much protection as an N-95 respirator. Cleanup or emergency workers may need a different type of breathing protection.</p>
          <p>Follow authorities’ instructions if they tell you to leave the area. Though it may seem safe to stay at home and wait out an eruption, doing so could be very dangerous. Volcanoes spew hot, dangerous gases, ash, lava, and rock that are powerfully destructive.</p>
          <h4>DURING VOLCANIC ERUPTION</h4>
          <P>Listen to a National Oceanic and Atmospheric Administration weather radio or TV for updated information.</P>
          <P>Be prepared to evacuate, and do so immediately if necessary (See Disaster Preparedness Series: Family Evacuation Plan).</P>
          <P>If outside at the time of eruption, seek shelter in a car or a building. If caught in volcanic ashfalls, wear a dust mask or use a handkerchief or cloth over your nose and mouth.</P>
          <P>Stay indoors as volcanic ash is a health hazard, especially if you have respiratory difficulties such as asthma or bronchitis.</P>
          <P>If you have to go outside use protective gear such as masks and goggles and keep as much of your skin covered as possible. Wear eyeglasses, not contact lenses as these can cause corneal abrasions.</P>
          <P>Disconnect drainpipes/downspouts from gutters to stop drains clogging. If you use a rainwater collection system for your water supply, disconnect the tank.</P>
          <h4>IF INJURED FROM VOLCANIC ERUPTION:</h4>
          <P>Cool the burn spot with cool or lukewarm running water for 20 minutes as soon as possible after the injury. Never use ice, iced water, or any creams or greasy substances like butter.</P>
          <p>Keep yourself or the person warm. Use a blanket or layers of clothing, but avoid putting them on the injured area. Keeping warm will prevent hypothermia, where a person's body temperature drops below 35C (95F). This is a risk if you're cooling a large burnt area, particularly in young children and elderly people.</p>
          <p>Airway irritation for people with asthma or bronchitis; common complaints of people with asthma include shortness of breath, wheezing and coughing. While these short-term effects are generally not considered harmful for people without pre-existing respiratory conditions, we recommend that people take steps to minimise their exposure to breathing airborne ash</p>
          <h5>If you're not trained in CPR or worried about giving rescue breaths, then provide hands-only CPR. That means uninterrupted chest compressions of 100 to 120 a minute until paramedics arrive. You don't need to try rescue breathing.</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="tornado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1>TORNADO PREPAREDNESS</h1>
          <a href="/"><img src={{asset('images/logo.png')}} alt="Logo" id="logos"></a>
        </div>
        <div class="modal-body">
          <h4>BEFORE TORNADO:</h4>
          <P>Preparedness involves a continuous process of planning, equipping, training and exercising. Planning for tornadoes requires identifying a place to take shelter, being familiar with and monitoring your community’s warning system, and establishing procedures to account for individuals in the building. Employers may need to obtain additional equipment and/or resources (e.g. Emergency Supply Kits) identified in the plan. In addition, workers need to be trained and plans need to be practiced to ensure that personnel are familiar with what to do in the event of a tornado.</P>
          <p>You should also be aware of what to do if caught outdoors when a tornado is threatening. Seek shelter in a basement or a sturdy building. If one is not within walking distance, try to drive in a vehicle, using a seat belt, to the nearest shelter. If flying debris is encountered while in a vehicle, there are two options: 1) staying in the vehicle with the seat belt on, keeping your head below the windows and covering it with your hands or a blanket, 2) if there is an area which is noticeable lower than the roadway, lie in that area and cover your head with your hands.</p>
          <h4>DURING TORNADO:</h4>
          <p>Protect yourself by covering your head or neck with your arms and putting materials such as furniture and blankets around or on top of you.</p>
          <p>Do not try to outrun a tornado in a vehicle if you are in a car. If you are in a car or outdoors and cannot get to a building, cover your head and neck with your arms and cover your body with a coat or blanket, if possible.</p>
          <p>If you cannot quickly walk to a shelter, immediately get into a vehicle and try to drive to the closest sturdy shelter. Remember to buckle your seat belt.</p>
          <p>If strong winds and flying debris occurs while driving, pull over and park, keeping your seat belt on and engine running. Put your head down below the windows, covering your head with your hands and a blanket.</p>
          <h4>AFTER TORNADO:</h4>
          <p>During and after a tornado, it is natural to experience different and strong emotions. Coping with these feelings and getting help when you need it will help you, your family, and your community recover from a disaster.</p>
          <p>We recommend the use of helmets to prevent head injuries caused by tornadoes and suggest prioritising the treatment of high-risk head and multiple-organ injuries. Additionally, medical rescuers should follow the ‘same quality and different quantity’ principle: the injured in all affected areas should receive equal attention, but numbers of medical personnel should be allocated based on the level of effects from the tornado.</p>
          <p><b>Clean Cut or Wound-</b>Gently clean with soap and warm water. Try to rinse soap out of wound to prevent irritation. Don’t use hydrogen peroxide or iodine, which can damage tissue.</p>
          <p><b>Stop Bleeding-</b>Apply direct pressure on the cut or wound with a clean cloth, tissue, or piece of gauze until bleeding stops. If blood soaks through the material, don’t remove it. Put more cloth or gauze on top of it and continue to apply pressure. If the wound is on the arm or leg, raise limb above the heart, if possible, to help slow bleeding.</p>
          <h5>If you're not trained in CPR or worried about giving rescue breaths, then provide hands-only CPR. That means uninterrupted chest compressions of 100 to 120 a minute until paramedics arrive. You don't need to try rescue breathing.</h5>
        </div>
      </div>
    </div>
  </div>

@endsection