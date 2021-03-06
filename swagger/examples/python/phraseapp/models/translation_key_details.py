# coding: utf-8

"""
    PhraseApp

    PhraseApp API for the interaction with the PhraseApp localization platform

    OpenAPI spec version: 2.0
    Contact: support@phraseapp.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class TranslationKeyDetails(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """


    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'name_plural': 'str',
        'comments_count': 'int',
        'max_characters_allowed': 'int',
        'screenshot_url': 'str',
        'unformatted': 'bool',
        'xml_space_preserve': 'bool',
        'original_file': 'str',
        'format_value_type': 'str'
    }

    attribute_map = {
        'name_plural': 'name_plural',
        'comments_count': 'comments_count',
        'max_characters_allowed': 'max_characters_allowed',
        'screenshot_url': 'screenshot_url',
        'unformatted': 'unformatted',
        'xml_space_preserve': 'xml_space_preserve',
        'original_file': 'original_file',
        'format_value_type': 'format_value_type'
    }

    def __init__(self, name_plural=None, comments_count=None, max_characters_allowed=None, screenshot_url=None, unformatted=None, xml_space_preserve=None, original_file=None, format_value_type=None):
        """
        TranslationKeyDetails - a model defined in Swagger
        """

        self._name_plural = None
        self._comments_count = None
        self._max_characters_allowed = None
        self._screenshot_url = None
        self._unformatted = None
        self._xml_space_preserve = None
        self._original_file = None
        self._format_value_type = None
        self.discriminator = None

        if name_plural is not None:
          self.name_plural = name_plural
        if comments_count is not None:
          self.comments_count = comments_count
        if max_characters_allowed is not None:
          self.max_characters_allowed = max_characters_allowed
        if screenshot_url is not None:
          self.screenshot_url = screenshot_url
        if unformatted is not None:
          self.unformatted = unformatted
        if xml_space_preserve is not None:
          self.xml_space_preserve = xml_space_preserve
        if original_file is not None:
          self.original_file = original_file
        if format_value_type is not None:
          self.format_value_type = format_value_type

    @property
    def name_plural(self):
        """
        Gets the name_plural of this TranslationKeyDetails.

        :return: The name_plural of this TranslationKeyDetails.
        :rtype: str
        """
        return self._name_plural

    @name_plural.setter
    def name_plural(self, name_plural):
        """
        Sets the name_plural of this TranslationKeyDetails.

        :param name_plural: The name_plural of this TranslationKeyDetails.
        :type: str
        """

        self._name_plural = name_plural

    @property
    def comments_count(self):
        """
        Gets the comments_count of this TranslationKeyDetails.

        :return: The comments_count of this TranslationKeyDetails.
        :rtype: int
        """
        return self._comments_count

    @comments_count.setter
    def comments_count(self, comments_count):
        """
        Sets the comments_count of this TranslationKeyDetails.

        :param comments_count: The comments_count of this TranslationKeyDetails.
        :type: int
        """

        self._comments_count = comments_count

    @property
    def max_characters_allowed(self):
        """
        Gets the max_characters_allowed of this TranslationKeyDetails.

        :return: The max_characters_allowed of this TranslationKeyDetails.
        :rtype: int
        """
        return self._max_characters_allowed

    @max_characters_allowed.setter
    def max_characters_allowed(self, max_characters_allowed):
        """
        Sets the max_characters_allowed of this TranslationKeyDetails.

        :param max_characters_allowed: The max_characters_allowed of this TranslationKeyDetails.
        :type: int
        """

        self._max_characters_allowed = max_characters_allowed

    @property
    def screenshot_url(self):
        """
        Gets the screenshot_url of this TranslationKeyDetails.

        :return: The screenshot_url of this TranslationKeyDetails.
        :rtype: str
        """
        return self._screenshot_url

    @screenshot_url.setter
    def screenshot_url(self, screenshot_url):
        """
        Sets the screenshot_url of this TranslationKeyDetails.

        :param screenshot_url: The screenshot_url of this TranslationKeyDetails.
        :type: str
        """

        self._screenshot_url = screenshot_url

    @property
    def unformatted(self):
        """
        Gets the unformatted of this TranslationKeyDetails.

        :return: The unformatted of this TranslationKeyDetails.
        :rtype: bool
        """
        return self._unformatted

    @unformatted.setter
    def unformatted(self, unformatted):
        """
        Sets the unformatted of this TranslationKeyDetails.

        :param unformatted: The unformatted of this TranslationKeyDetails.
        :type: bool
        """

        self._unformatted = unformatted

    @property
    def xml_space_preserve(self):
        """
        Gets the xml_space_preserve of this TranslationKeyDetails.

        :return: The xml_space_preserve of this TranslationKeyDetails.
        :rtype: bool
        """
        return self._xml_space_preserve

    @xml_space_preserve.setter
    def xml_space_preserve(self, xml_space_preserve):
        """
        Sets the xml_space_preserve of this TranslationKeyDetails.

        :param xml_space_preserve: The xml_space_preserve of this TranslationKeyDetails.
        :type: bool
        """

        self._xml_space_preserve = xml_space_preserve

    @property
    def original_file(self):
        """
        Gets the original_file of this TranslationKeyDetails.

        :return: The original_file of this TranslationKeyDetails.
        :rtype: str
        """
        return self._original_file

    @original_file.setter
    def original_file(self, original_file):
        """
        Sets the original_file of this TranslationKeyDetails.

        :param original_file: The original_file of this TranslationKeyDetails.
        :type: str
        """

        self._original_file = original_file

    @property
    def format_value_type(self):
        """
        Gets the format_value_type of this TranslationKeyDetails.

        :return: The format_value_type of this TranslationKeyDetails.
        :rtype: str
        """
        return self._format_value_type

    @format_value_type.setter
    def format_value_type(self, format_value_type):
        """
        Sets the format_value_type of this TranslationKeyDetails.

        :param format_value_type: The format_value_type of this TranslationKeyDetails.
        :type: str
        """

        self._format_value_type = format_value_type

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, TranslationKeyDetails):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
