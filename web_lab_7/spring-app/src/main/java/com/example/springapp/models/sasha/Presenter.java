package com.example.springapp.models.sasha;

import lombok.Data;

import javax.persistence.*;

@Entity
@Data
public class Presenter {

	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	private String fName;
	private String sName;
	private String phone;

	@Enumerated(EnumType.STRING)
	private Sex sex;

	private enum Sex {
		MAN, WOMAN
	}
}
