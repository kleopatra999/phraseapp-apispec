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


class Styleguide(object):
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
        'id': 'str',
        'title': 'str',
        'created_at': 'datetime',
        'updated_at': 'datetime'
    }

    attribute_map = {
        'id': 'id',
        'title': 'title',
        'created_at': 'created_at',
        'updated_at': 'updated_at'
    }

    def __init__(self, id=None, title=None, created_at=None, updated_at=None):
        """
        Styleguide - a model defined in Swagger
        """

        self._id = None
        self._title = None
        self._created_at = None
        self._updated_at = None
        self.discriminator = None

        if id is not None:
          self.id = id
        if title is not None:
          self.title = title
        if created_at is not None:
          self.created_at = created_at
        if updated_at is not None:
          self.updated_at = updated_at

    @property
    def id(self):
        """
        Gets the id of this Styleguide.

        :return: The id of this Styleguide.
        :rtype: str
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this Styleguide.

        :param id: The id of this Styleguide.
        :type: str
        """

        self._id = id

    @property
    def title(self):
        """
        Gets the title of this Styleguide.

        :return: The title of this Styleguide.
        :rtype: str
        """
        return self._title

    @title.setter
    def title(self, title):
        """
        Sets the title of this Styleguide.

        :param title: The title of this Styleguide.
        :type: str
        """

        self._title = title

    @property
    def created_at(self):
        """
        Gets the created_at of this Styleguide.

        :return: The created_at of this Styleguide.
        :rtype: datetime
        """
        return self._created_at

    @created_at.setter
    def created_at(self, created_at):
        """
        Sets the created_at of this Styleguide.

        :param created_at: The created_at of this Styleguide.
        :type: datetime
        """

        self._created_at = created_at

    @property
    def updated_at(self):
        """
        Gets the updated_at of this Styleguide.

        :return: The updated_at of this Styleguide.
        :rtype: datetime
        """
        return self._updated_at

    @updated_at.setter
    def updated_at(self, updated_at):
        """
        Sets the updated_at of this Styleguide.

        :param updated_at: The updated_at of this Styleguide.
        :type: datetime
        """

        self._updated_at = updated_at

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
        if not isinstance(other, Styleguide):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other