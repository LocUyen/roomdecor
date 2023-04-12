# This files contains your custom actions which can be used to run
# custom Python code.
#
# See this guide on how to implement these action:
# https://rasa.com/docs/rasa/custom-actions


# This is a simple example for a custom action which utters "Hello World!"
from os import link
from typing import Any, Text, Dict, List

from rasa_sdk import Action, Tracker
from rasa_sdk.executor import CollectingDispatcher
from rasa_sdk.events import UserUtteranceReverted

# class ActionDefaultFallback(Action):
#     """Executes the fallback action and goes back to the previous state
#     of the dialogue"""

#     def name(self) -> Text:
#         return ACTION_DEFAULT_FALLBACK_NAME

#     async def run(
#         self,
#         dispatcher: CollectingDispatcher,
#         tracker: Tracker,
#         domain: Dict[Text, Any],
#     ) -> List[Dict[Text, Any]]:
#         dispatcher.utter_message(template="my_custom_fallback_template")

#         # Revert user message which led to fallback.
#         return [UserUtteranceReverted()]
# class ActionHelloWorld(Action):

#     def name(self) -> Text:
#         return "action_hello_world"

#     def run(self, dispatcher: CollectingDispatcher,
#             tracker: Tracker,
#             domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

#         dispatcher.utter_message(text="Hello World!")

#         return []
# class ActionCustomFallback(Action):

#     def name(self) -> Text:
#         return "action_custom_fallback"

#     def run(self, dispatcher: CollectingDispatcher,
#             tracker: Tracker,
#             domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

#         dispatcher.utter_template('utter_custom', tracker)

#         return [UserUtteranceReverted()]


class Actionsfengshuimetal(Action):

    def name(self) -> Text:
        return "action_fengshui_metal"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        Link = "https://homeoffice.com.vn/nguoi-mang-kim-va-nhung-giai-phap-trong-thiet-ke-noi-that.html"
        dispatcher.utter_template("utter_fengshui_metal", tracker, link=Link)
        return []

class Actionsfengshuiearth(Action):

    def name(self) -> Text:
        return "action_fengshui_earth"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        fengshui_earth = "https://noithattli.vn/cach-trang-tri-phong-khach-cho-nguoi-menh-tho.html"
        dispatcher.utter_template("utter_fengshui_earth", tracker, link=fengshui_earth)
        return []

class Actionsfengshuiwater(Action):

    def name(self) -> Text:
        return "action_fengshui_water"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        fengshui_water = "https://aicjsc.com/noi-that-mau-gi-hop-cho-nguoi-menh-thuy/"
        dispatcher.utter_template("utter_fengshui_water", tracker, link=fengshui_water)
        return []

class Actionsfengshuicarpentry(Action):

    def name(self) -> Text:
        return "action_fengshui_carpentry"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        fengshui_carpentry = "https://shac.vn/cach-thiet-ke-phong-ngu-dep-phong-thuy-cho-nguoi-menh-moc"
        dispatcher.utter_template("utter_fengshui_carpentry", tracker, link=fengshui_carpentry)
        return []

class Actionsfengshuifire(Action):

    def name(self) -> Text:
        return "action_fengshui_fire"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        fengshui_fire = "https://noithatmanhhe.vn/phong-ngu-cho-nguoi-menh-hoa"
        dispatcher.utter_template("utter_fengshui_fire", tracker, link=fengshui_fire)
        return []

class Actionswood_floor(Action):

    def name(self) -> Text:
        return "action_tip_wood_floor"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        Link = "https://www.youtube.com/watch?v=XVMe6_abra8"
        dispatcher.utter_template("utter_tip_wood_floor", tracker, link=Link)
        return []

class Actionscarpet_floor(Action):

    def name(self) -> Text:
        return "action_tip_carpet_floor"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        Link = " https://www.youtube.com/watch?v=d35UTRnylto&t=542s"
        dispatcher.utter_template("utter_tip_carpet_floor", tracker, link=Link)
        return []

class Actionswall_sticker(Action):

    def name(self) -> Text:
        return "action_tip_wall_sticker"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        Link = "https://www.youtube.com/shorts/AH1DQBbgAgM"
        dispatcher.utter_template("utter_tip_wall_sticker", tracker, link=Link)
        return []

class Actionswallpaper(Action):

    def name(self) -> Text:
        return "action_tip_wallpaper"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        Link = "https://www.youtube.com/shorts/4139MVBuFqI"
        dispatcher.utter_template("utter_tip_wallpaper", tracker, link=Link)
        return []

class Actionslight(Action):

    def name(self) -> Text:
        return "action_tip_light"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        Link = "https://www.youtube.com/watch?v=TGY6bu0HPf4"
        dispatcher.utter_template("utter_tip_light", tracker, link=Link)
        return []

class Actionlove_decor1(Action):

    def name(self) -> Text:
        return "action_love_decor1"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        Link = "https://www.facebook.com/groups/nghiendecor.official"
        dispatcher.utter_template("utter_love_decor1", tracker, link=Link)
        return []

class Actionlove_decor2(Action):

    def name(self) -> Text:
        return "action_love_decor2"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        Link = "https://www.facebook.com/groups/nghiendecor9999"
        dispatcher.utter_template("utter_love_decor2", tracker, link=Link)
        return []

class Actionlove_decor3(Action):

    def name(self) -> Text:
        return "action_love_decor3"

    def run(self, dispatcher: CollectingDispatcher,
            tracker: Tracker,
            domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:
        Link = "https://www.facebook.com/groups/NGHIENDECOR.MENHA"
        dispatcher.utter_template("utter_love_decor3", tracker, link=Link)
        return []



