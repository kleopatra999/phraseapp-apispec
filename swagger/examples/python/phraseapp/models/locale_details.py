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


class LocaleDetails(object):
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
        'statistics': 'LocaleStatistics'
    }

    attribute_map = {
        'statistics': 'statistics'
    }

    def __init__(self, statistics=None):
        """
        LocaleDetails - a model defined in Swagger
        """

        self._statistics = None
        self.discriminator = None

        if statistics is not None:
          self.statistics = statistics

    @property
    def statistics(self):
        """
        Gets the statistics of this LocaleDetails.

        :return: The statistics of this LocaleDetails.
        :rtype: LocaleStatistics
        """
        return self._statistics

    @statistics.setter
    def statistics(self, statistics):
        """
        Sets the statistics of this LocaleDetails.

        :param statistics: The statistics of this LocaleDetails.
        :type: LocaleStatistics
        """

        self._statistics = statistics

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
        if not isinstance(other, LocaleDetails):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other